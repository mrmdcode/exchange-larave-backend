<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sell extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sell', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_USER');
            $table->string('name_singup');
            $table->string('Currency');
            $table->string('Amount');
            $table->string('Deposit_wallet_name');
            $table->string('Deposit_wallet_SHARE');
            $table->string('Deposit_wallet_SECRET');
            $table->string('Registration_time');
            $table->string('Purchase_Price');
            $table->string('Serial');
            $table->string('Account_Number');
            $table->string('Card_Number');
            $table->string('Shaba_Number');
            $table->string('Cardholder_Name');
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
