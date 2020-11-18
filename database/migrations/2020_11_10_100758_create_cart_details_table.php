<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cart_id');
            $table->unsignedBigInteger('food_id');
            $table->integer('amount');
            $table->nullableTimestamps();
            // food_id
            $table->index(["food_id"], 'fk_cart_details_foods1_idx');
            $table->foreign('food_id', 'fk_cart_details_foods1_idx')
                ->references('id')->on('foods')
                ->onDelete('no action')
                ->onUpdate('no action');
            // cart_id
            $table->index(["cart_id"], 'fk_cart_details_carts1_idx');
            $table->foreign('cart_id', 'fk_cart_details_carts1_idx')
                ->references('id')->on('carts')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart_details');
    }
}
