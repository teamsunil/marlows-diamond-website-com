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
        Schema::create('instagram_datas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('insta_id')->nullable();
            $table->string('link')->nullable()->comment('like a parmalink');
            $table->string('image_url')->nullable()->comment('like a media url');
            $table->string('alt')->nullable()->comment('Like A Caption');
            $table->string('title')->nullable()->comment('Like A Caption');
            $table->string('media_type', 250)->nullable();
            $table->timestamp('insta_timestamp')->nullable();
            $table->string('username', 250)->nullable();
            $table->tinyInteger('status')->default(1);
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
        Schema::dropIfExists('instagram_datas');
    }
};
