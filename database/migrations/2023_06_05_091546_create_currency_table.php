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
        Schema::create('currency', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('currency_name')->unique('currency_name');
            $table->string('currency_title', 250);
            $table->string('currency_sign');
            $table->string('base_price')->nullable();
            $table->boolean('status')->default(true)->comment('1:Active, 0:Inactive');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable()->useCurrent();

            $table->unique(['currency_name', 'currency_title'], 'currency_name_2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('currency');
    }
};
