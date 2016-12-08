<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
        $table->increments('order_id')->unique();
            $table->string('type',32); // to/from the airport
            $table->string('title',5);
            $table->string('fullname', 70);
            $table->string('address');
            $table->string('PLZ', 60);  
            $table->string('phone_number',20);
            $table->string('email');
            $table->tinyInteger('coffer_number');
            $table->tinyInteger('passengers');
            $table->string('comment',500)->nullable(); 
            $table->date('date');
            $table->time('time');
            // from the airport data
            $table->string('flight_from', 100)->nullable();
            $table->string('flight_number', 8)->nullable();
            $table->string('status', 20)->default('pending');
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
        Schema::drop('orders');
    }
}
