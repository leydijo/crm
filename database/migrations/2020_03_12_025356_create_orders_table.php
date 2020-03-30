<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->bigInteger('register_user_id')->unsigned();
            $table->bigInteger('products_id')->unsigned();
            $table->bigInteger('brands_id')->unsigned();
            $table->bigInteger('state_tenis_id')->unsigned();
            $table->bigInteger('orders_id')->unsigned();
            $table->enum('name', ['En Proceso', 'Por Entregar', 'Cerrado']);
            $table->integer('payment');
            $table->integer('order_number');
            $table->string('reference');
            $table->date('deliver_date');
         


            $table->foreign('register_user_id')->references('id')->on('new_user')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');


            $table->foreign('products_id')->references('id')->on('products')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
                    
            $table->foreign('brands_id')->references('id')->on('brands')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
                
             $table->foreign('state_tenis_id')->references('id')->on('state_tenis')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');

            // $table->foreign('state_orders_id')->references('id')->on('state_orders')
            //             ->onDelete('cascade')
            //             ->onUpdate('cascade');       
               
             $table->foreign('orders_id')->references('id')->on('orders')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');             

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
        Schema::dropIfExists('orders');
    }
}
