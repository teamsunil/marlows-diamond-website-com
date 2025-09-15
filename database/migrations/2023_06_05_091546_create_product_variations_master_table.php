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
        Schema::create('product_variations_master', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('product_id')->nullable();
            $table->string('master_id')->nullable();
            $table->string('master_parent_id')->nullable();
            $table->text('master_data')->nullable();
            $table->string('combination_id')->nullable();
            $table->string('total_price')->nullable();
            $table->string('price', 50)->nullable();
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
        Schema::dropIfExists('product_variations_master');
    }
};
