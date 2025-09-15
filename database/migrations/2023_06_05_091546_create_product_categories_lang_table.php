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
        Schema::create('product_categories_lang', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('category_id');
            $table->string('lang', 50);
            $table->string('title');
            $table->integer('parent_id');
            $table->string('name', 100);
            $table->string('short_description');
            $table->text('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_categories_lang');
    }
};
