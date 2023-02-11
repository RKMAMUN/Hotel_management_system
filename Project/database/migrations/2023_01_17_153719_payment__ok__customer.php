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
        Schema::create('payment_ok_clear',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('room_no');
            $table->string('room_type');
            $table->string('room_free');
            $table->string('day');
            $table->string('check_in');
            $table->string('check_out');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('customer_number');
            $table->string('email');
            $table->string('id_card_type');
            $table->string('id_card_number');
            $table->string('address');
            $table->string('payment');


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
