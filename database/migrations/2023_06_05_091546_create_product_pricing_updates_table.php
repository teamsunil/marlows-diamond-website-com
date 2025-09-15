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
        Schema::create('product_pricing_updates', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('product_id')->nullable();
            $table->string('category_id')->nullable();
            $table->string('type', 30)->nullable();
            $table->string('discount_percentage', 4)->nullable();
            $table->integer('is_applicable')->default(0);
            $table->integer('is_active')->default(1);
            $table->integer('is_deleted')->default(1);
            $table->timestamp('created_at')->useCurrent();
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
        Schema::dropIfExists('product_pricing_updates');
    }
};
