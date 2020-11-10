<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->intger('voucher');
            $table->integer('payment');
            $table->string('address');

            // user_id
            $table->unsignedBigInteger('user_id');
            $table->index(["user_id"], 'fk_invoices_users1_idx');
            $table->nullableTimestamps();
            $table->foreign('user_id', 'fk_invoices_users1_idx')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
