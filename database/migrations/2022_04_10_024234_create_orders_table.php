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
            $table->integer('user_id')->nullable();
            $table->longText('product')->nullable();
            $table->string('quantity')->nullable();
            $table->longText('name')->nullable();
            $table->longText('data')->nullable();
            $table->longText('session_id')->nullable();
            $table->longText('payment_intent')->nullable();
            $table->string('payer_email')->nullable();
            $table->string('amount')->nullable();
            $table->string('currency')->nullable();
            $table->string('payment_status')->nullable();
            $table->string('orderstatus_id')->nullable();
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
