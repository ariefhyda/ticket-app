<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction', function (Blueprint $table) {
            $table->id();
            $table->string('transaction_code');
            $table->integer('user_id');
            $table->integer('bank_id');
            $table->integer('ticket_price_id');
            $table->string('quantity');
            $table->string('price');
            $table->string('total');
            $table->string('proof_of_payment')->nullable();
            $table->boolean('payment_status')->default(false);
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
        Schema::dropIfExists('transaction');
    }
};
