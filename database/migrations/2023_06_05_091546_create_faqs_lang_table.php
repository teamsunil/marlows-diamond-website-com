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
        Schema::create('faqs_lang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('faqs_id', 20);
            $table->string('lang', 20);
            $table->string('title');
            $table->text('description');
            $table->string('categories', 250)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faqs_lang');
    }
};
