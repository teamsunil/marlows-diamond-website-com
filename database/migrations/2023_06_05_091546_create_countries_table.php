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
        Schema::create('countries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 150)->unique('name');
            $table->string('shortname', 10);
            $table->string('phonecode', 100)->nullable();
            $table->string('currency', 250);
            $table->string('language_code', 250)->default('EN');
            $table->timestamps();

            $table->unique(['name'], 'name_2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries');
    }
};
