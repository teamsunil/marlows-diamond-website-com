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
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->index('user_id');
            $table->string('custom_order_id', 25)->nullable();
            $table->timestamp('pay_timestamp')->nullable();
            $table->string('correlationid', 250)->nullable();
            $table->string('acknowledge', 250)->nullable();
            $table->string('build', 250)->nullable();
            $table->string('token', 250)->nullable();
            $table->decimal('final_price');
            $table->string('payment_type', 100);
            $table->string('currency_symbol', 250);
            $table->string('paymentccdetails', 50)->nullable();
            $table->string('depositpercentage', 50)->nullable();
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
        Schema::dropIfExists('orders');
    }
};
