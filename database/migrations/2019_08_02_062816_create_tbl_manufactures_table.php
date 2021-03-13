<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblManufacturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_manufactures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('manufacture_name');
            $table->string('manufacture_description');
            $table->string('publication_status');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('tbl_categories');
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
        Schema::dropIfExists('tbl_manufactures');
    }
}
