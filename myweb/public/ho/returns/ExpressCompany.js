
var express = {
    order: 0,
    companies: null,
    linkElement: null,
    close: function () {
        $("#expressContainer").hide();
    },
    fillCompanies: function (data) {
        $("#companies").children(":gt(0)").remove();
        
        $.each(data, function() {
            var element = "<option value={0}>{0}</option>".format(this);
            $("#companies").append(element);
        });
        $("#companies").append("<option value='-1'>其他公司</option>");
    },
    changeCompany: function () {
        express.clearWarning();
        if ($(this).val() == "-1") {
            $("#searchCompany").parent().show();
        } else {
            $("#searchCompany").parent().hide();
        }
    },
    filterCompany: function (value, fullMatch) {
        return $.grep(express.companies, function (element, index) {
            return fullMatch ? (element['name'] === value) : (element['name'].indexOf(value) > -1);
        });
    },
    getCompanyName: function () {
        var companyName = $("#companies").val();
        var searchElement = $("#searchCompany");
        if (searchElement.parent().is(":visible")) {
            companyName = searchElement.val();
        }
        return companyName;
    },
    clearWarning: function () {
        $("#expressContainer p.returnGoods_Tips").text("").hide();
    },
    warning: function (message) {
        var warningElement = $("#expressContainer p.returnGoods_Tips");
        warningElement.text("提示：{0}".format(message)).show();
    },
    validateCompayny: function () {
        var items = express.filterCompany(express.getCompanyName(), true);
        if (items.length != 1) {
            express.warning("请输入有效的快递公司");
            return false;
        }
        express.clearWarning();
        return true;
    },
    validateExpressOrder: function () {
        var items = express.filterCompany(express.getCompanyName(), true);
        if (items.length != 1) {
            return false;
        }
        var expressOrder = $.trim($("#expressOrder").val());
        var pattern = $.trim(items[0].pattern);
        if (pattern == "") {
            if (expressOrder == "") {
                express.warning("请输入有效的快递单号");
                return false;
            }
        }
        else {
            var regex = new RegExp(pattern, "i");
            if (!regex.test(expressOrder)) {
                express.warning("请输入有效的快递单号");
                return false;
            }
        }
        express.clearWarning();
        return true;
    },
    validate: function () {
        return express.validateCompayny() && express.validateExpressOrder();
    },
    submit: function () {
        if (express.validate()) {
            var data = {
                "acceptCode": express.order,
                "companyName": express.getCompanyName(),
                "dispatchNo": $.trim($("#expressOrder").val())
            };
            $.ajax({
                "url": "/AcceptList/UpdateExpress",
                "type": "post",
                "data": data,
                "async": false,
                "success": function (response) {
                    if (!AcceptList.ensureLogin(response)) {
                        return;
                    }
                    if (response['code'] == 0) {
                        if ($("#EditExpress").length == 0) {
                            express.linkElement.hide();
                        }
                        express.close();
                    }
                    else {
                        express.warning(response['message']);
                    }
                },
                error: function () {

                }
            });
        }
    },
    setCompanies: function () {
        $.ajax({
            "url": "/AcceptList/ExpressCompanies",
            "type": "post",
            "async": false,
            success: function (response) {
                if (!AcceptList.ensureLogin(response)) {
                    return;
                }
                express.companies = response;
            },
            error: function () {

            }
        });
    },
    link: function (event) {
        var linkElement = $(event.srcElement || event.target);
        express.linkElement = linkElement;
        express.order = linkElement.attr("data-order");
        var left = parseFloat(linkElement.attr("data-left"));
        var top = parseFloat(linkElement.attr("data-top"));
        var offset = linkElement.offset();
        var element = $("#expressContainer");
        element.css({
            "top": offset.top + top,
            "left": offset.left + left
        });
        element.show();
        express.clearWarning();
        $("#searchCompany,#expressOrder").val("");

        if ($("#EditExpress").length != 0) {
            var expressNo = $("#EditExpress").attr("data-dn");
            var expressCpn = $("#EditExpress").attr("data-cpn");
            
            if ($("#companies option[value='" + expressCpn + "']").length > 0) {
                $("#companies option[value='" + expressCpn + "']").attr("selected", true);
            } else {
                $("#companies").val(-1);
                $("#companies option[value='-1']").trigger("change");
                $("#searchCompany").val(expressCpn);
            }
            
            $("#expressOrder").val(expressNo);
        }

    },
    create: function () {
        if (express.companies == null) {
            express.setCompanies();
        }
        var searchCompany = $("#searchCompany");
        searchCompany.autocompletefix({
            delay: 100,
            source: function (request, response) {
                var items = express.filterCompany(request.term, false);
                response($.map(items, function (element) {
                    return element['name'];
                }));
            }
        });
        var recommend = ["申通", "圆通速递", "顺丰", "中通速递", "EMS/E邮宝",
            "韵达快递", "宅急送", "天天快递", "汇通快运", "如风达", "E邮宝"];
        express.fillCompanies(recommend);
        $("#companies").bind("change", express.changeCompany);
        searchCompany.bind("blur", express.validateCompayny);
        $("#expressOrder").bind("blur", express.validateExpressOrder);
        $("#expressContainer a.express_cancel").bind("click", express.close);
        $("#expressContainer input.express_submit").bind("click", express.submit);
    }
};