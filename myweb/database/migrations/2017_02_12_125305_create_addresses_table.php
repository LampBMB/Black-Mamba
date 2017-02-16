<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // php artisan make:models/Address -m
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id')->comment('主键id');
            $table->string('sheng')->comment('省份id');
            $table->string('shi')->comment('市id');
            $table->string('xian')->comment('县id');
            $table->string('jiedao')->comment('详细地址');
            $table->string('code')->comment('邮编');
            $table->string('phone')->comment('手机号');
            $table->string('name')->comment('收件人');
            $table->integer('user_id')->comment('用户的id');
            $table->integer('isdefault')->comment('是否默认 1默认 0不默认');
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
        Schema::drop('addresses');
    }
}
