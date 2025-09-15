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
        Schema::create('discount_ranges', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->integer('category_id')->nullable();
            $table->string('diamond_type')->nullable();
            $table->integer('discount_id')->nullable();
            $table->decimal('from_price')->nullable();
            $table->decimal('to_price', 12)->nullable();
            $table->integer('discount')->nullable();
            $table->tinyInteger('status')->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('discount_ranges');
    }
};
