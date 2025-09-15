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
        Schema::create('banners_lang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('banners_id', 20);
            $table->string('lang', 20);
            $table->integer('page_id')->nullable();
            $table->string('title');
            $table->string('language', 250);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banners_lang');
    }
};
