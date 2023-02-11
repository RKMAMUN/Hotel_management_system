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
        Schema::create('complain',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('complainant_name');
            $table->string('complaint_type');
            $table->string('complaint');
            $table->string('created_at');
            $table->string('resolve_status');
            $table->string('resolve_date');
            $table->string('budget');



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
