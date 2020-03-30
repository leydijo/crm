<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersRegisterUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_register_user', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('register_user_id')->unsigned();
            $table->bigInteger('orders_id')->unsigned();
         


            $table->foreign('register_user_id')->references('id')->on('new_user');
            $table->foreign('orders_id')->references('id')->on('orders');
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
        Schema::dropIfExists('orders_register_user');
    }
}
