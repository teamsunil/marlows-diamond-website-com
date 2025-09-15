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
        Schema::create('app_products', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('combination_id')->nullable();
            $table->text('title')->nullable();
            $table->text('slug')->nullable();
            $table->text('tags');
            $table->integer('is_variable')->nullable()->default(1);
            $table->integer('dfinder_status');
            $table->string('diamond_shape')->nullable();
            $table->text('short_description')->nullable();
            $table->text('description')->nullable();
            $table->string('sale_price')->nullable();
            $table->string('regular_price')->nullable();
            $table->text('meta_title');
            $table->text('meta_keyword');
            $table->text('meta_description');
            $table->integer('is_featured')->default(0);
            $table->integer('is_taxable')->default(0);
            $table->integer('stock_status')->default(1);
            $table->integer('status')->default(0);
            $table->integer('is_draft')->default(0);
            $table->integer('is_active')->default(1);
            $table->integer('is_deleted')->default(0);
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
        Schema::dropIfExists('app_products');
    }
};
