<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMerchantDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchant_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->integer('merchant_id')->nullable();
            $table->string('merchant_name')->unique();
            $table->string('floor')->nullable();
            $table->string('street_number')->nullable();
            $table->string('route')->nullable();
            $table->string('locality')->nullable();
            $table->string('city')->nullable();
            $table->string('state_emirate_code')->nullable();
            $table->string('country')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('address')->nullable();
            $table->string('icon_logo')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('name')->nullable();
            $table->string('rating')->nullable();
            $table->string('reviews')->nullable();
            $table->string('type')->nullable();
            $table->string('vicinity')->nullable();
            $table->string('website')->nullable();
            $table->string('stock_price')->nullable();
            $table->string('founded')->nullable();
            $table->string('ceo')->nullable();
            $table->string('founders')->nullable();
            $table->string('owned_by')->nullable();
            $table->string('industry')->nullable();
            $table->string('headquarters')->nullable();
            $table->string('products')->nullable();
            $table->string('services')->nullable();
            $table->string('twitter_handle')->nullable();
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
        Schema::dropIfExists('merchant_details');
    }
}
