<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id('property_id');
            $table->string('title', 255);
            $table->text('description')->nullable();
            $table->text('short_info')->nullable();
            $table->decimal('price', 12, 2);
            $table->string('address', 255)->nullable();
            $table->string('city', 100)->default('Luton');
            $table->string('postcode', 20)->nullable();
            $table->string('county', 100)->default('Bedfordshire');
            $table->string('country', 100)->default('United Kingdom');
            $table->float('area')->nullable();
            $table->string('property_type', 50)->nullable();
            $table->enum('status', ['available', 'sold', 'pending'])->default('available');
            $table->string('image', 255)->nullable(); // Main image path
            $table->json('gallery_images')->nullable(); // JSON array for gallery images
            $table->json('amenities')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
