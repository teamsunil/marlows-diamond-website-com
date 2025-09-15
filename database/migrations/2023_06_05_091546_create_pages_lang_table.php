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
        Schema::create('pages_lang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pages_id', 20);
            $table->string('lang', 20);
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->text('short_description')->nullable();
            $table->text('description');
            $table->string('template')->default('default_template');
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
        Schema::dropIfExists('pages_lang');
    }
};
