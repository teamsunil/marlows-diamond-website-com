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
        Schema::create('app_products_categories', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('product_id')->nullable();
            $table->string('category_id')->nullable();
            $table->integer('is_active')->default(1);
            $table->integer('is_deleted')->nullable()->default(0);
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
        Schema::dropIfExists('app_products_categories');
    }
};
