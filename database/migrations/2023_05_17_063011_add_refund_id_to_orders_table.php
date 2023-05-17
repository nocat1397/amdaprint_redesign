<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRefundIdToOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->longText('refund_id')->after('payment_intent')->nullable();
            $table->string('refund_status')->after('refund_id')->nullable();
            $table->string('refund_amount')->after('refund_status')->nullable();
            $table->longText('charge_id')->after('refund_amount')->nullable();
            $table->longText('transaction_id')->after('charge_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            //
        });
    }
}
