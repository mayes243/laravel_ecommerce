<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_order_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')->references('id')->on('tbl_orders');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('tbl_products');
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('tbl_customers');
            $table->string('product_name');
            $table->string('product_price');
            $table->string('product_sales_quantity');
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
        Schema::dropIfExists('tbl_order_details');
    }
}






