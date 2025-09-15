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
        Schema::create('settings_lang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('option_name')->nullable();
            $table->text('option_value')->nullable();
            $table->string('lang', 50)->default('EN');
            $table->integer('settings_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings_lang');
    }
};
