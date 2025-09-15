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
        Schema::create('posts_lang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('posts_id', 20);
            $table->string('lang', 250);
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->text('short_description')->nullable();
            $table->text('description');
            $table->string('categories')->nullable();
            $table->string('image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts_lang');
    }
};
