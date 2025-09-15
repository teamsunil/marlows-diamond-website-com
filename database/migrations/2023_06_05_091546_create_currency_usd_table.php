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
        Schema::create('currency_usd', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('product_id')->nullable();
            $table->bigInteger('variation_id')->nullable();
            $table->string('product_name')->nullable();
            $table->string('product_price')->nullable();
            $table->string('coverted_price')->nullable();
            $table->string('margin')->nullable();
            $table->string('discount')->nullable();
            $table->string('total')->nullable();
            $table->string('vat')->nullable();
            $table->string('grand_total')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->timestamp('created_at')->useCurrentOnUpdate()->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('currency_usd');
    }
};
