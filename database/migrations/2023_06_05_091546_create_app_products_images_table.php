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
        Schema::create('app_products_images', function (Blueprint $table) {
            $table->integer('id');
            $table->string('parent_id')->nullable();
            $table->string('image_id')->nullable()->comment('Belongs to image gallery');
            $table->string('belongs_from')->nullable()->comment('this coloumn is depends the table name');
            $table->integer('image');
            $table->string('size')->nullable();
            $table->string('extension')->nullable();
            $table->text('original_name')->nullable();
            $table->text('metadata')->nullable();
            $table->enum('image_type', ['featured_image', 'product_gallery', 'variation', 'thumb_image', 'thumb_video'])->default('featured_image');
            $table->integer('display_order')->nullable();
            $table->integer('is_active')->default(1);
            $table->integer('is_deleted')->default(0);
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
        Schema::dropIfExists('app_products_images');
    }
};
