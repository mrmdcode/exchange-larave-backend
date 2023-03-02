<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Price extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('price', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Bitcoin');
            $table->string('Ethereum');
            $table->string('XRP');
            $table->string('Tether');
            $table->string('Bitcoin_Cash');
            $table->string('state');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('price');
    }
}
