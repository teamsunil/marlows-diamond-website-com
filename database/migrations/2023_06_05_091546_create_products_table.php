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
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 180);
            $table->string('slug', 250)->nullable()->index('slug');
            $table->text('old_slug')->nullable();
            $table->string('tags', 250)->nullable();
            $table->boolean('is_variable')->default(true);
            $table->tinyInteger('dfinder_status')->default(0);
            $table->string('diamond_shape')->nullable();
            $table->text('short_description')->nullable();
            $table->text('description')->nullable();
            $table->text('old_description')->nullable();
            $table->text('lab_description')->nullable();
            $table->string('categories');
            $table->decimal('sale_price')->nullable();
            $table->decimal('regular_price')->nullable();
            $table->string('meta_title', 250)->nullable();
            $table->string('meta_keyword', 250)->nullable();
            $table->text('meta_description')->nullable();
            $table->tinyInteger('is_featured')->default(0)->index('is_featured');
            $table->tinyInteger('is_taxable')->default(0)->index('is_taxable');
            $table->boolean('stock_status')->default(true)->index('stock_status');
            $table->tinyInteger('status')->default(0)->index('status');
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
};
