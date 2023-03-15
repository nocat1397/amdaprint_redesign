<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDealersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dealers', function (Blueprint $table) {
            $table->id();
            $table->string('email')->nullable();
            $table->string('passsword')->nullable();
            $table->string('company_name')->nullable();
            $table->string('company_phone')->nullable();
            $table->string('position')->nullable();
            $table->string('website')->nullable();
            $table->string('mobile')->nullable();
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            $table->string('address')->nullable();
            $table->string('zip')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('reseller')->nullable();
            $table->string('industry_type')->nullable();
            $table->string('find_us')->nullable();
            $table->string('tax_id')->nullable();
            $table->longText('certificate')->nullable();
            $table->longText('license')->nullable();
            $table->integer('status')->nullable();
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
        Schema::dropIfExists('dealers');
    }
}
