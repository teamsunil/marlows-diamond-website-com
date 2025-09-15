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
        Schema::create('customer_lang', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id');
            $table->string('lang', 20);
            $table->string('name', 50);
            $table->string('nicename');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_lang');
    }
};
