<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id')->nullable();
            $table->longText('sub_category_id')->nullable();
            $table->longText('name')->nullable();
            $table->longText('desc')->nullable();
            $table->longText('specification')->nullable();
            $table->longText('size')->nullable();
            $table->longText('paper_type')->nullable();
            $table->longText('qty')->nullable();
            $table->longText('pricing')->nullable();
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
        Schema::dropIfExists('products');
    }
}
