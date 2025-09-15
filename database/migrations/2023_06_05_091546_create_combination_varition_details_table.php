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
        Schema::create('combination_varition_details', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('varation_id')->nullable()->comment('Belongs to masters');
            $table->string('combination_varation_id')->nullable();
            $table->string('attribute_id')->nullable();
            $table->string('price')->nullable();
            $table->string('combination_id')->nullable();
            $table->tinyInteger('is_active')->default(1);
            $table->tinyInteger('is_deleted')->default(0);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('combination_varition_details');
    }
};
