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
        Schema::create('discounts', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('category_id');
            $table->string('category_slug')->nullable();
            $table->integer('discount')->nullable();
            $table->string('diamond_type')->nullable();
            $table->integer('inc_percentage')->nullable()->comment('Price Increase Percentage');
            $table->integer('is_login_users')->default(0)->comment('Discount only applies for login customers if this is true, else this discount applied for all users');
            $table->date('start_date')->nullable();
            $table->integer('is_permanent')->default(0)->comment('is always applicable ');
            $table->date('end_date')->nullable();
            $table->tinyInteger('status')->comment('0=no, 1=yes');
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
        Schema::dropIfExists('discounts');
    }
};
