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
        Schema::create('settings_langback', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('settings_id');
            $table->string('lang', 50);
            $table->string('site_title');
            $table->string('site_tagline');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings_langback');
    }
};
