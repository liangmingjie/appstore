<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Developer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('developers', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('type');
            $table->string('nickname');  //开发者昵称
            $table->string('realname'); //真实姓名
            $table->string('email')->unique();  //开发者email
            $table->integer('phone');    //开发者联系电话
            $table->integer('identity_card_number'); //身份证号码
            $table->string('identity_card_image');   //身份证扫描件
            $table->integer('qq');   //qq
            $table->integer('user_id');  //用户id
            $table->integer('audit');    //审核状态
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
        //
        Schema::drop('developers');
    }
}
