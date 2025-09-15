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
        Schema::create('app_product_attributes', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('product_id')->nullable();
            $table->string('attribute_id')->nullable()->comment('belongs from masters table');
            $table->integer('display_order')->nullable();
            $table->integer('is_active')->nullable()->default(1);
            $table->integer('is_deleted')->default(0);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->text('information')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_product_attributes');
    }
};
