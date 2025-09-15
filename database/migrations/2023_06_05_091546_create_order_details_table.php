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
        Schema::create('order_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('order_id')->index('order_id');
            $table->integer('product_id')->index('product_id');
            $table->longText('product_details')->nullable();
            $table->longText('order_product_details')->nullable();
            $table->integer('user_id');
            $table->integer('quantity');
            $table->decimal('product_price');
            $table->decimal('total_price');
            $table->tinyInteger('status')->nullable()->default(0);
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
        Schema::dropIfExists('order_details');
    }
};
