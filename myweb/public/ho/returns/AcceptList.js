/// <reference path="jquery-1.4.1-vsdoc.js"/>
//*********************************************************
//通用函数
//*********************************************************
String.prototype.format = function () {
    var args = arguments;
    return this.replace(/(?:{(\d{1})})/g, function (m, g) {
        return args[parseInt(g)];
    });
};

///此方法看调用ajax的返回 如果是json就是对象 如果是text就是string 本页都是text的返回
///所以用下面的方法
function IsLoginOut(response) {
    //    if (!msg && !msg.intLanjie && msg.intLanjie == 100) {
    //        $.fn.alert('登录失效,请重新登录！');
    //        window.location.reload();
    //    }
    if (response == "{\"intLanjie\":100}") {
        $.fn.alert('登录失效,请重新登录！');
        window.location.reload();
        return false;
    }
    return true;
}

///点击申请退换货函数 
///加载订单列表 退换货记录隐藏 订单记录显示 动画
function ApplyReturns() {
    var b = $("#tab_02").css("display");
    var one = $("#v2Return_Btn01").attr("one");
    var os = $.trim($("#txtSearchOrder").val());
    $("#UserMap").html("<a href='http://returns.vancl.com/'>退换货申请</a>");
    $("#box").remove();
    if (one == "0") {
        OrderList.page();
    }
    else if (os != "" && os != "按订单编号/商品编号/商品名称") {
        OrderList.Back();
    }

    $("#tab_01").attr("class", "track");
    $("#tab_01").html("<a href='javascript:SetTabs();'>退换货记录</a>");
    $("#tab_01_box").hide();
    $("#accept_list").hide();

    $("#tab_02").attr("class", "track on");
    $("#tab_02").show();
    $("#tab_02_box").show();
    $("#order_list").show();

    $("#RollBox").show();
    $("#RollBox").animate({ opacity: "0.4", top: "100", right: "530", height: "0", width: "0" }, "slow");
}

///tab变换调用函数
///如果原来显示则隐藏 原来隐藏则显示
///很工整的三部分tab_01 tab_01_box accept_list
function SetTabs() {
    var cls = $("#tab_02").attr("class");
    var as = $.trim($("#search").val());
    var os = $.trim($("#txtSearchOrder").val());
    var fst = $("#tab_02").attr("data-first");

    $("#box").remove();
    if (cls == "track on") {
        $("#tab_01").html("退换货记录");
        $("#tab_01").attr("class", "track on");
        $("#tab_01_box").show();
        $("#accept_list").show();
        if (as != "" && as != "按原订单号/退换货单号") {
            $("#search").val("按原订单号/退换货单号");
            AcceptList.page();
        }
        $("#tab_02").attr("class", "track");
        $("#tab_02").html("<a href='javascript:SetTabs();'>退换货申请</a>");
        $("#UserMap").html("<a href='http://returns.vancl.com/'>退换货记录</a>");
        $("#tab_02_box").hide();
        $("#order_list").hide();
    }
    else {
        $("#tab_01").html("<a href='javascript:SetTabs();'>退换货记录</a>");
        $("#UserMap").html("<a href='http://returns.vancl.com/'>退换货申请</a>");
        $("#tab_01").attr("class", "track");
        $("#tab_01_box").hide();
        $("#accept_list").hide();
        if (os != "" && os != "按订单编号/商品编号/商品名称") {
            OrderList.Back();
        } else if (fst == "0") {
            OrderList.page();
        }
        $("#tab_02").attr("class", "track on");
        $("#tab_02").html("退换货申请");
        $("#tab_02_box").show();
        $("#order_list").show();
    }
}

//*********************************************************
///退换货记录操作对象 
//*********************************************************
var AcceptList = {};


AcceptList.ensureLogin = function (response) {
    if (response == "{\"intLanjie\":100}") {
        $.fn.alert('登录失效,请重新登录！', function () {
            location.reload();
        });
        return false;
    }
    return true;
};


AcceptList.Box = function(element, content) {
    var eventSrc = $(element);
    var accept = eventSrc.attr("accept");
    var init = function() {
        if ($("#box").size() < 1) {
            var t = [];
            t.push('<div id="box" class="v2Return_Cancelbox">');
            t.push('    <a href="javascript:void(0);" class="v2Return_CancelShut"></a>');
            t.push('    <span class="blank0"></span>');
            t.push('    <span class="v2Return_Cancelico"></span>');
            t.push('    <span class="content" ></span><br />');
            t.push('    <a href="javascript:void(0);" style="color:#A10000;font-weight:bold;" class="confirm">确定</a>');
            t.push('</div>');

            $(document.body).append(t.join(""));
        }
        $("#box span.content").html(content);
        setLocation();
        $("#box a.v2Return_CancelShut").click(close);
        $("#box a.confirm").one("click", callback);
    };

    var setLocation = function() {
        var offset = $(eventSrc).offset(),
            width = $("#box").outerWidth(true),
            height = $("#box").outerHeight(true);

        $("#box").css({
            "left": offset.left - width + 51,
            "top": offset.top - height - 6
        });
    };
    var callback = function() {
        $.ajax({
            url: "/AcceptList/Cancel",
            data: { "id": accept },
            type: "post",
            success: function(response) {
                if (!AcceptList.ensureLogin(response)) {
                    close();
                    return;
                }
                if (response["state"] === 1) {
                    $("#box a.confirm").css("visibility", "hidden");
                    $("#box span.content").html("取消成功");
                    eventSrc.closest("td").prev().find("div").html("无效");
                    eventSrc.parent().prevAll("a.payurl").remove();
                    eventSrc.parent().prev().andSelf().remove();
                } else {
                    close();
                    var msg = "对不起，受理单取消失败，请再次尝试；若仍不成功请联系客服，电话：400 650 7099";
                    if (response["message"] != "") {
                        msg = response["message"];
                    }
                    $.fn.alert(msg);
                }
            }
        });
    };
    var close = function() {
        $("#box").remove();
    };

    init();
};

AcceptList.water = function(txtCtrl, tip) {
    if ($.trim($(txtCtrl).val()).length == 0) {
        $(txtCtrl).val(tip);
    }
    $(txtCtrl).focusin(function() {
        var t = $.trim($(this).val());
        if (t == $.trim(tip)) {
            $(this).val("");
        }
    });
    $(txtCtrl).focusout(function() {
        if ($.trim($(this).val()).length == 0) {
            $(this).val(tip);
        }
    });
};

AcceptList.photoCache = {};
AcceptList.PhotoShow = function(obj, acceptCode) {

    var eventSrc = $(obj);
    var ul = $(obj).prev();
    var photos = ul.children();

    var collapse = function(ctrl) {
        var photos = ctrl.prev().children();
        photos.filter(":gt(2)").remove();
        ctrl.removeClass("v2Return_productsMore01")
            .addClass("v2Return_productsMore");
    };

    var expand = function() {
        var cacheData = AcceptList.photoCache[acceptCode];
        if (cacheData == null) {
            $.ajax({
                async: false,
                type: "GET",
                cache: false,
                url: "/AcceptList/ProductPhoto/" + acceptCode,
                success: function(data) {
                    if (!AcceptList.ensureLogin(data)) {
                        return;
                    }
                    if (data != "") {
                        cacheData = data;
                        AcceptList.photoCache[acceptCode] = cacheData;
                    }
                }
            });
        }

        if (cacheData != null && cacheData != '') {

            $("#accept_list a.v2Return_productsMore01").each(function() {
                collapse($(this));
            });

            eventSrc.removeClass("v2Return_productsMore")
                .addClass("v2Return_productsMore01");
            ul.html(cacheData);
        }
    };

    this.render = function() {
        if (photos.length <= 3) {
            expand();
        } else {
            collapse($(obj));
        }
        ;
    };
};

///退换货记录分页显示
AcceptList.page = function (event) {
    var search = $.trim($("#search").val());
    var index = 1;
    if (event) {
        var eventSrc = $(event.target);
        var page = eventSrc.attr("page");
        index = parseInt(page.split('_')[1]);
        index = page.split('_')[0] == "0" ? index - 1 : index + 1;
    }
    else {
        $("#accept_loading").show();
    }

    $("#accept_page_loading").show();
    $.ajax({
        type: "POST",
        data: { "page": index, "searchinfo": search },
        url: "/AcceptList/AcceptListByPager/",
        cache: false,
        success: function (response) {
            if (!AcceptList.ensureLogin(response)) {
                return;
            }
            $("#accept_page_loading,#accept_loading").hide();
            $("#accept_list").html(response);    
            $(window).scrollTop($("#v2Return_right").offset().top);
        },
        complete: function () {
            AcceptList.AcceptMoneyInfo();
            AcceptList.AcceptValidateCancel();
            AcceptList.AcceptFailReason();
        }
    });
};

AcceptList.search = function () {

    var s = $.trim($("#search").val());
    if (s == "" || s == "按原订单号/退换货单号") {
        $.fn.alert("请输入待查询的内容");
        $("#search").focus();
        return;
    }
    if (/^\d+$/.test(s) === false) {
        $.fn.alert("输入格式错误");
        $("#search").focus();
        return;
    }
    $("#accept_loading").show();
    $.ajax({
        type: "post",
        url: "/AcceptList/AcceptListBySearchInfo",
        data: { "searchinfo": s },
        success: function (response) {
            if (!AcceptList.ensureLogin(response)) {
                return;
            }
            $("#accept_list").html(response);
        },
        complete: function () {
            $("#accept_loading").hide();
            AcceptList.AcceptMoneyInfo();
            AcceptList.AcceptValidateCancel();
            AcceptList.AcceptFailReason();
        }
    });
};

AcceptList.AcceptMoneyInfo = function() {
    var param = $("#AcceptTable").attr("data-json");
    var ReturnStyle = "#ReturnStyle";

    if (param == "") return;
    $.ajax({
        type: "POST",
        url: "/AcceptList/AcceptMoneyInfo",
        data: { "json": param },
        success: function(data) {
            if (data != null && data.length > 0) {
                for (i = 0; i < data.length; i++) {
                    var id = data[i].AcceptCode;
                    var paymenttype = data[i].ReturnMoney < 0 ? "应支付" : "应退款";
                    var returnway = data[i].ReturnMoney < 0 ? "支付方式" : "退款方式";

                    var t = [];
                    t.push('<span class="gray3b">' + paymenttype + '</span>');
                    t.push('<span class="reda1b"> ￥' + FormatMoney(Math.abs(data[i].ReturnMoney), 2) + '</span>');
                    t.push('<br />');

                    if (data[i].PaymentSum > 0 && data[i].ReturnMoney < 0) {
                        t.push('<span style="padding-left: 15px; color: #000;">余额已付：' + data[i].PaymentSum + '</span>');
                        t.push('<span class="blank5"></span>');
                    }

                    if (data[i].CardId != null && data[i].CardId != "") {
                        t.push('<span style="padding-left: 15px; color: #000;">退礼品卡：' + FormatMoney(Math.abs(data[i].CardSum), 2) + '</span>');
                        t.push('<span class="blank5"></span>');
                    }
                    if (data[i].ReturnMoney != 0) {
                        t.push(returnway + '：' + data[i].ReturnWay + '<br />');
                    }
                    if ($(ReturnStyle + id).attr("data-cache") != "True") {
                        $(ReturnStyle + id).prepend(t.join(""));
                    }
                }
            }
        },
        complete: function() {
        }
    });
};

AcceptList.AcceptValidateCancel = function () {
    var param = $("#AcceptTable").attr("data-json");
    var ReturnPayment = "#ReturnPayment";
    var ReturnDetail = "#ReturnDetail";

    if (param == "") return;
    $.ajax({
        type: "POST",
        url: "/AcceptList/AcceptValidateCancel",
        data: { "json": param },
        success: function (data) {
            if (data != null && data.length > 0) {
                for (i = 0; i < data.length; i++) {
                    var id = data[i].AcceptCode;
                    var t = [];
                    if (data[i].ReturnMoney < 0 && data[i].PayToVancl == 0) {
                        t.push('<a class="v2Return_Payment" href="javascript:void(0);">已支付</a>');
                    }
                    if (data[i].PayToVancl > 0 && data[i].ShowOnlinePay) {
                        t.push('<a class="v2Return_Payment01 whifff payurl" href="' + data[i].PayUrl + '" target="_blank">现在支付</a>');
                    }

                    //FormatMoney(Math.abs(data[i].ReturnMoney), 2);

                    if ($(ReturnPayment + id).attr("data-cache") != "True") {
                        $(ReturnPayment + id).prepend(t.join(""));
                    }

                    if (data[i].AllowCancel) {
                        var Message = "确定要取消退换货申请吗？";
                        var tc = [];
                        if (data[i].ReturnMoney < 0 && data[i].PayToVancl < Math.abs(data[i].ReturnMoney)) {
                            Message = "取消后已支付金额将存入账户余额";
                        }
                        tc.push('<span class="v2Return_line1">|</span>');
                        tc.push('<div class="v2Return_Cancel">');
                        tc.push('<a onclick="new AcceptList.Box(this,\'' + Message + '\');" accept="' + id + '" class="reda10" href="javascript:void(0);">取消</a>');
                        tc.push('</div>');

                        if ($(ReturnPayment + id).attr("data-cache") != "True") {
                            //$(ReturnPayment + id).append(tc.join(""));
                            $(tc.join("")).insertAfter(ReturnDetail + id);
                        }
                    }
                }
            }
        },
        complete: function () {
        }
    });
};

AcceptList.AcceptFailReason = function () {
    var param = $("#AcceptTable").attr("data-json");
    var ReturnStatus = "#ReturnStatus";

    if (param == "") return;
    $.ajax({
        type: "POST",
        url: "/AcceptList/AcceptFailReason",
        data: { "json": param },
        success: function (data) {
            if (data != null && data.length > 0) {
                for (i = 0; i < data.length; i++) {
                    var id = data[i].AcceptCode;
                    var t = [];
                    if (data[i].Reason != "") {
                        t.push('<a class="fureda10" href="javascript:void(0);" title="' + data[i].Reason + '">未成功</a>');
                        $(ReturnStatus + id).append(t.join(""));
                    }
                }
            }
        },
        complete: function () {
        }
    });
};

var OrderTrack = {};
OrderTrack.getScreenX = function () {
    var w = document.documentElement.clientWidth;
    var n = document.documentElement.scrollLeft;
    var screenX = (w - 653) / 2 + n;
    return screenX;
};

OrderTrack.getScreenY = function () {
    var h = document.documentElement.clientHeight;
    var m = $(window).scrollTop();
    var screenY = (h - 400) / 2 + m;
    return screenY;
};

OrderTrack.show = function (formcode, objectID) {
    var _left = this.getScreenX();
    var _top = this.getScreenY();
    var t = [];
    t.push("<div style='position: absolute; top:{0}px;left:{1}px;z-index: 100001;' id='trackDiv' class='zuizong'>".format(_top, _left));
    t.push("    <div class='title'>");
    t.push("        <p>换货进度</p>");
    t.push("        <span>");
    t.push("            <a  style='cursor: pointer;' onclick='$(\"#cover\").hide();$(document).unmask();'>关闭</a>");
    t.push("        </span>");
    t.push("    </div>");
    t.push("    <div class='dingdan'>");
    t.push("        <div id='info{0}' class='jindu'></div>".format(formcode));
    t.push("    </div>");
    t.push("    <div class='di'>");
    t.push("        <img src='http://i.vanclimg.com/returns/order/di.gif' alt=''>");
    t.push("    </div>");
    t.push("</div>");

    if ($("#cover").size() == 0) {
        $(document.body).append("<div id='cover'></div>");
    }

    $("#cover").html(t.join("")).show();

    $.ajax({
        async: false,
        cache: false,
        type: "get",
        dataType: "text",
        url: "/AcceptList/OrderTrackLine/" + formcode,
        beforeSend: function () {
            $("#info" + formcode).html("<br/><img src='http://i.vanclimg.com/returns/order/loading.gif' alt='' />正在读取，请稍候...");
        },
        success: function (response) {
            if (!AcceptList.ensureLogin(response)) {
                return;
            }
            $("#info" + formcode).html(response);
        }
    });
};

var AcceptTrack = {};
AcceptTrack.getScreenX = function () {
    var w = document.documentElement.clientWidth;
    var n = document.documentElement.scrollLeft;
    var screenX = (w - 653) / 2 + n;
    return screenX;
};

AcceptTrack.getScreenY = function () {
    var h = document.documentElement.clientHeight;
    var m = $(window).scrollTop();
    var screenY = (h - 400) / 2 + m;
    return screenY;
};

AcceptTrack.show = function (formcode, objectID) {
    var _left = this.getScreenX();
    var _top = this.getScreenY();
    var t = [];
    t.push("<div style='position: absolute; top:{0}px;left:{1}px;z-index: 100001;' id='trackDiv' class='zuizong'>".format(_top, _left));
    t.push("    <div class='title'>");
    t.push("        <p>退换货进度</p>");
    t.push("        <span>");
    t.push("            <a  style='cursor: pointer;' onclick='$(\"#cover\").hide();$(document).unmask();'>关闭</a>");
    t.push("        </span>");
    t.push("    </div>");
    t.push("    <div class='dingdan'>");
    t.push("        <div id='info{0}' class='jindu'></div>".format(formcode));
    t.push("    </div>");
    t.push("    <div class='di'>");
    t.push("        <img src='http://i.vanclimg.com/returns/order/di.gif' alt=''>");
    t.push("    </div>");
    t.push("</div>");

    if ($("#cover").size() == 0) {
        $(document.body).append("<div id='cover'></div>");
    }

    $("#cover").html(t.join("")).show();

    $.ajax({
        async: false,
        cache: false,
        type: "get",
        dataType: "text",
        url: "/AcceptList/AcceptTrack/" + formcode,
        beforeSend: function () {
            $("#info" + formcode).html("<br/><img src='http://i.vanclimg.com/returns/order/loading.gif' alt='' />正在读取，请稍候...");
        },
        success: function (response) {
            if (!AcceptList.ensureLogin(response)) {
                return;
            }
            $("#info" + formcode).html(response);
        }
    });
};

OrderTrack.VjiaBox = function(o) {
    var _html = [];
    _html.push('<div  class="handle_Time_Content" tag="handletime">');
    _html.push('    <div class="handle_Time">');
    _html.push('        <div class="handle_Time_Box">');
    _html.push('            <div class="handle_Time_Tab">');
    _html.push('                <dl class="handle_Time_Title">');
    _html.push('                    <dt>处理时间</dt>');
    _html.push('                    <dd>退换货单追踪信息</dd>');
    _html.push('                </dl>');
    _html.push('                <dl id="vjiaorder_loading" style="margin: 10px auto;">');
    _html.push('                    <p><img src="http://i1.vanclimg.com/returns/returns/loading.gif" align="absmiddle" />正在为您加载,请稍候...</p>');
    _html.push('                </dl>');
    _html.push('            </div>');
    _html.push('            <div class="handle_Time_Btn"></div>');
    _html.push('        </div>');
    _html.push('    </div>');
    _html.push('</div>');
    o.append(_html.join(''));
};

//*********************************************************
//OrderList页的所有操作对象
//*********************************************************
var OrderList = {};
OrderList.photoCache = {};
OrderList.PhotoShow = function(obj, FormCode) {
    var ul = $(obj).parent().find("ul");
    var li = ul.find("li");
    var img = $(obj).find("img");
    if (li.length <= 3) {
        $.ajax({
            async: false,
            type: "GET",
            cache: false,
            dataType: "html",
            url: "/AcceptList/OrderProductPhoto/" + FormCode,
            //beforeSend: function () { $("#TxtMsg").html("<img src=\"https://sslimg.vancl.com/AlterOrder/loading.gif\" class=\"imglodding\" />正在为您提交，请稍候..."); },
            success: function(data) {
                if (data != "") {

                    IsLoginOut(data);

                    img.attr("src", "https://sslimg.vancl.com/myvancl/2011/btn-1.gif");
                    ul.html(data);
                }
            },
            error: function() {
            }
        });
        var picid = $("#hidproductid").val();
        var newpicid = "pic" + FormCode;
        if (ul.find("li").length > 3 && picid != newpicid) {
            if (picid != "") {
                var oldli = $("#" + picid).find("li");
                var htmlli1 = "";
                oldli.each(function(i) {
                    if (i < 3) {
                        htmlli1 += "<li>" + $(this).html() + "</li>";
                    }
                });

                var oldimg = $("#" + picid).next().find("img");
                oldimg.attr("src", "https://sslimg.vancl.com/myvancl/2011/btn.gif");
                $("#" + picid).html(htmlli1);
            }
            $("#hidproductid").val("pic" + FormCode);
        }
    } else {
        var htmlli = "";
        li.each(function(i) {
            if (i < 3) {
                htmlli += "<li>" + $(this).html() + "</li>";
            }
        }
        );
        ul.html(htmlli);

        img.attr("src", "https://sslimg.vancl.com/myvancl/2011/btn.gif");
    }
};

///订单加载 包括分页和搜索
///逻辑复杂就会有问题 相当于我点分页 即使我没搜索也按搜索走
///搜索按照搜索走 普通按照普通走 关键是否点了搜索按钮 点击之后把搜索条件存起来 分页时候从这个值取 
///而不是从控件取
OrderList.page = function (event) {

    var search = "";
    if ($("#btnSearchOrder").attr("search")) {
        search = $("#btnSearchOrder").attr("search");
    }

    //var search = $.trim($("#txtSearchOrder").val());

    if (event) {
        //debugger;
        var eventSrc = $(event.target);
        var page = eventSrc.attr("page");
        var index = page;
        //            var index = parseInt(page.split('_')[1]);
        //            //alert(index);

        //            index = page.split('_')[0] == "0" ? index - 1 : index + 1;
    } else {
        var index = 1;
    }

    var fst = $("#tab_02").attr("data-first");
    $.ajax({
        type: "POST",
        data: { "page": index, "searchinfo": search },
        url: "/AcceptList/OrderListByPager/",
        cache: false,
        beforeSend: function () {
            if (fst == 0) {
                $("#order_loading").show();
            }
            else {
                $("#order_page_loading").show();
            }
        },
        success: function (response) {
            //验证登录超时  分页 和 搜索使用
            if(!IsLoginOut(response)) return;

            $("#order_list").html(response);
            //跳转到最上面的元素
            $(window).scrollTop($("#v2Return_right").offset().top);
        },
        complete: function () {
            $("#tab_02").attr("data-first", "1");
            $("#order_loading,#order_page_loading").hide();
        }
    });
};

///搜索按钮调用函数
///得到搜索值 请求OrderListByPager
OrderList.search = function () {
    var o = $("#txtSearchOrder");
    var s = $.trim(o.val());
    if (s == "" || s == "按订单编号/商品编号/商品名称") {
        $.fn.alert("请输入待查询的内容");
        o.focus();
        return false;
    }

    //保存search条件 在页中
    $("#btnSearchOrder").attr("search", s);

    $.ajax({
        type: "post",
        url: "/AcceptList/OrderListByPager",
        data: { "searchInfo": s },
        beforeSend: function () {
            $("#order_loading").show();
        },
        success: function (response) {
            if (response == "{\"intLanjie\":100}") {
                $("#order_loading").hide();
                $.fn.alert('登录失效,请重新登录！');
                window.location.reload();
            }
            else {
                $("#order_list").html(response);
            }
        },
        complete: function () {
            $("#order_loading").hide();
        }
    });
};

///返回超链函数
OrderList.Back = function() {
    //debugger; 
    $("#btnSearchOrder").attr("search", "");
    $("#txtSearchOrder").css('color', '#7d7d7d');
    $("#txtSearchOrder").val("按订单编号/商品编号/商品名称");
    $("#tab_02").attr("data-first", "0");
    OrderList.page();
};

//图片显示
function PhotoShow(obj, FormCode) {
    var ul = $(obj).parent().find("ul");
    var li = ul.find("li");
    var img = $(obj).find("img");
    if (li.length <= 3) {
        $.ajax({
            async: false,
            type: "GET",
            cache: false,
            dataType: "html",
            url: "/AcceptList/OrderProductPhoto/" + FormCode,
            //beforeSend: function () { $("#TxtMsg").html("<img src=\"https://sslimg.vancl.com/AlterOrder/loading.gif\" class=\"imglodding\" />正在为您提交，请稍候..."); },
            success: function (data) {
                if (data != "") {

                    IsLoginOut(data);

                    img.attr("src", "https://sslimg.vancl.com/myvancl/2011/btn-1.gif");
                    ul.html(data);
                }
            },
            error: function () {
            }
        });
        var picid = $("#hidproductid").val();
        var newpicid = "pic" + FormCode;
        if (ul.find("li").length > 3 && picid != newpicid) {
            if (picid != "") {
                var oldli = $("#" + picid).find("li");
                var htmlli1 = "";
                oldli.each(function (i) {
                    if (i < 3) {
                        htmlli1 += "<li>" + $(this).html() + "</li>";
                    }
                });

                var oldimg = $("#" + picid).next().find("img");
                oldimg.attr("src", "https://sslimg.vancl.com/myvancl/2011/btn.gif");
                $("#" + picid).html(htmlli1);
            }
            $("#hidproductid").val("pic" + FormCode);
        }
    } else {
        var htmlli = "";
        li.each(function (i) {
            if (i < 3) {
                htmlli += "<li>" + $(this).html() + "</li>";
            }
        }
    );
        ul.html(htmlli);

        img.attr("src", "https://sslimg.vancl.com/myvancl/2011/btn.gif");
    }
}

function FormatMoney(num, n) {
    if (num && n) {
        num = parseFloat(num);
        num = String(num.toFixed(n));
        var re = /(-?\d+)(\d{3})/;
        while (re.test(num)) {
            num = num.replace(re, "$1,$2");
        }
        return num;
    } else {
        return "0.00";
    }
}

