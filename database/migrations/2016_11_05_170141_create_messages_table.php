<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('messages', function (Blueprint $table) {
        $table->increments('message_id')->unique();
            $table->string('fullname', 70);
            $table->string('phone_number',20);
            $table->string('email');
            $table->string('message',500)->nullable(); 
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
        Schema::drop('messages');

    }
}
