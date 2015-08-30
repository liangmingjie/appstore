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
            $table->string('real_name'); //真实姓名
            $table->string('email')->unique();  //开发者email
            $table->integer('telephone');    //开发者联系电话
            $table->integer('id_card'); //身份证号码
            $table->string('id_card_image');   //身份证扫描件
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
