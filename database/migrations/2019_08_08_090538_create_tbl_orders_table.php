<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('tbl_customers');
            $table->unsignedBigInteger('shipping_id');
            $table->foreign('shipping_id')->references('id')->on('tbl_shippings');
            $table->unsignedBigInteger('payment_id');
            $table->foreign('payment_id')->references('id')->on('tbl_payments');
            $table->string('order_total');
            $table->string('order_status');
            $table->timestamp('order_date_time');
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
        Schema::dropIfExists('tbl_orders');
    }
}
