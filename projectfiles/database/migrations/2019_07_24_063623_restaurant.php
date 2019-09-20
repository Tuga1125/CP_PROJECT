<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Restaurant extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('user_role', ['admin', 'customer'])->nullable();           
             $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('photo_url')->nullable();    
            $table->rememberToken();
            $table->timestamps();
        });
       
        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });
        Schema::create('food_item_types', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->timestamps();

        });
        Schema::create('food_items', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->string('price');
            $table->integer('fooditemtype_id')->unsigned();
            $table->foreign('fooditemtype_id')->references('id')->on('food_item_types');
        });

        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->date('order_date');
            $table->integer('quantity');
            $table->enum('status', ['Delivered', 'In trainsit']);
            $table->timestamps();
        });

        Schema::create('orderitem',function(Blueprint $table){
            $table->increments('id');
            $table->integer('order_id')->unsigned();
            $table->foreign('order_id')->references('id')->on('orders');
            $table->integer('food_item_id')->unsigned();
            $table->foreign('food_item_id')->references('id')->on('food_items');
            $table->string('quantity');
            $table->string('price');
         
        });  

    }
    /**
    * Reverse
    *yyyy
    * @return void
    */
    public function down()
    {
        Schema::dropIfExists('users');

        Schema::dropIfExists('invoice_items');
        Schema::dropIfExists('invoices');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('meals');
        Schema::dropIfExists('restaurant_tables');
        Schema::dropIfExists('items');
        Schema::dropIfExists('password_resets');
    }
}
