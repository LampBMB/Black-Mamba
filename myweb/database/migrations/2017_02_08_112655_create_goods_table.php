<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->increments('id')->comment('id');
            $table->integer('typeid')->comment('商品种类id');
            $table->string('goods')->comment('商品名称');
            $table->decimal('price',8,2)->comment('商品价格');
            $table->string('picname')->comment('商品主图');
            $table->string('descr')->comment('商品描述');
            $table->integer('num')->comment('购买量');
            $table->integer('state')->comment('状态');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('goods');
    }
}
