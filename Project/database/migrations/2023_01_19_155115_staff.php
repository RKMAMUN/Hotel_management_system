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
        Schema::create('staff',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('staff_name');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('card_type');
            $table->string('card_no');
            $table->string('contact_number');
            $table->string('address');
            $table->string('salary');
            $table->string('shift');



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
