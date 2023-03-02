<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Authentication1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authentication_1', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_USER');
            $table->string('name_singup');
            $table->string('Fname');
            $table->string('Lname');
            $table->string('National_Code');
            $table->string('Fathers_Name');
            $table->string('Date_Of_Birth');
            $table->string('Place_Of_Birth');
            $table->string('Sex');
            $table->string('Postal_Code');
            $table->string('State');
            $table->string('City');
            $table->string('Address');
            $table->string('Plaque');
            $table->rememberToken();
            $table->timestamps();
           // $table->timestamp('created_at')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('authentication_1');
    }
}
