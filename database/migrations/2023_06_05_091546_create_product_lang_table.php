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
        Schema::create('product_lang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('products_id', 20);
            $table->string('lang', 20);
            $table->string('title');
            $table->text('short_description');
            $table->text('description');
            $table->text('lab_description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_lang');
    }
};
