<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Authentication2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authentication_2', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_USER');
            $table->string('name_singup');
            $table->integer('Bank_Name');
            $table->string('Branch_Name');
            $table->integer('Branch_Code');
            $table->string('Account_Number');
            $table->string('Shaba_Namber');
            $table->string('Card_Number');
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
    }
}
