<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->string('office_address');
            $table->string('email');
            $table->string('phone');
            $table->string('operator_name');
            $table->string('operator_phone');
            $table->string('tin');
            $table->string('trade_number');
            $table->integer('status')->default(1)->comment('1. for Active 2. for Inactive');

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
        Schema::dropIfExists('vendors');
    }
}
