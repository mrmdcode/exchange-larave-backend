<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Buy extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buy', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_USER');
            $table->string('name_singup');
            $table->string('Currency');
            $table->string('Amount');
            $table->string('Deposit_wallet');
            $table->string('Registration_time');
            $table->string('Purchase_Price');
            $table->string('Serial');
            $table->string('Condition');
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
