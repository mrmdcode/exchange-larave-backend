<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Authentication3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authentication_3', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_USER');
            $table->string('name_singup');
            $table->string('image_face');
            $table->string('image_card');
            $table->string('image_face_and_card');
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
