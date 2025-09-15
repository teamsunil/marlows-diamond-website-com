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
        Schema::create('languages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->unique('title');
            $table->string('language_code', 250);
            $table->string('counties', 250)->nullable();
            $table->text('description');
            $table->boolean('status')->default(true)->comment('1:Active, 0:Inactive');
            $table->integer('is_deleted')->default(0);
            $table->softDeletes();
            $table->timestamps();

            $table->unique(['title'], 'title_2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('languages');
    }
};
