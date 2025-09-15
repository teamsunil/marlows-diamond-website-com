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
        Schema::create('product_variations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('product_id')->index('product_id');
            $table->decimal('sale_price')->nullable();
            $table->decimal('regular_price')->nullable();
            $table->tinyInteger('stock_status')->nullable();
            $table->string('vari_image')->nullable();
            $table->string('vari_video')->nullable();
            $table->text('multi_vari_video')->nullable();
            $table->text('multi_vari_img')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('product_variations');
    }
};
