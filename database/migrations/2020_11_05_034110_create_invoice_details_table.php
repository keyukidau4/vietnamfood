<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_details', function (Blueprint $table) {
            $table->id();
            $table->integer('amount');
            $table->integer('price');

            // invoice_id
            $table->unsignedBigInteger('invoice_id');
            $table->index(["invoice_id"], 'fk_invoices_foods1_idx');
            $table->foreign('invoice_id', 'fk_invoices_foods1_idx')
                ->references('id')->on('invoices')
                ->onDelete('no action')
                ->onUpdate('no action');
            // food_id
            $table->unsignedBigInteger('food_id');
            $table->index(["food_id"], 'fk_carts_foods1_idx');
            $table->foreign('food_id', 'fk_carts_foods1_idx')
                ->references('id')->on('foods')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->integer('amount');
            $table->nullableTimestamps();

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
        Schema::dropIfExists('invoice_details');
    }
}
