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
        Schema::create('app_product_attribute_variation_descripiton', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('product_id')->nullable();
            $table->string('attribute_id')->nullable()->comment('Belongs to app_product_attributes');
            $table->string('master_attribute_id')->nullable()->comment('belongs from masters table');
            $table->string('attribute_variation_id')->nullable()->comment('Belongs from product_attribute_variations');
            $table->string('variations_id')->nullable();
            $table->string('variation_id')->nullable()->comment('Belongs to masters');
            $table->string('variation_parent_id')->nullable();
            $table->text('variation_name')->nullable();
            $table->text('variation_data')->nullable();
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
        Schema::dropIfExists('app_product_attribute_variation_descripiton');
    }
};
