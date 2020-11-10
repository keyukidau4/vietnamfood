<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('food_id');
            $table->unsignedBigInteger('user_id');
            $table->integer('amount');
            $table->nullableTimestamps();
            // food_id
            $table->index(["food_id"], 'fk_carts_foods1_idx');
            $table->foreign('food_id', 'fk_carts_foods1_idx')
                ->references('id')->on('foods')
                ->onDelete('no action')
                ->onUpdate('no action');
            // user_id
            $table->index(["user_id"], 'fk_carts_users1_idx');
            $table->foreign('user_id', 'fk_carts_users1_idx')
                ->references('id')->on('users')
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
        Schema::dropIfExists('carts');
    }
}
