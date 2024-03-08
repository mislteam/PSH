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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_category_id')->constrained()->onDelete('cascade');
            $table->foreignId('product_sub_category_id')->constrained()->onDelete('cascade');
            $table->foreignId('product_brand_id')->constrained()->onDelete('cascade');
            // Add other columns for your product table
            $table->string('name');
            $table->json('specification')->nullable();
            $table->longText('description');
            $table->string('product_pdf')->nullable();
            $table->string('product_video_link')->nullable();
            $table->string('product_feature_image')->nullable();
            $table->string('product_guide_pdf')->nullable();
            $table->string('product_guide_video')->nullable();
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
        Schema::dropIfExists('products');
    }
};
