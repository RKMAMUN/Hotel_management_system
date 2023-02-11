<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('room_no');
            $table->string('room_type');
            $table->string('booking_date');
            $table->string('check_in');
            $table->string('check_out');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('customer_number');
            $table->string('email');
            $table->string('id_card_type');
            $table->string('id_card_number');
            $table->string('transaction');
            $table->string('address');
            $table->string('advance_payment');


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
};
