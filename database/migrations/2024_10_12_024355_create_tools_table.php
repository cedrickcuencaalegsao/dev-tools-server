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
        Schema::create('tools', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->json('category')->nullable(); // JSON type for category
            $table->string('language')->nullable();
            $table->unsignedBigInteger('clickCount')->nullable();
            $table->longText('documentation_url')->nullable();
            $table->longText('description')->nullable();
            $table->string('image')->default('default.jpg'); // Set default image
            $table->timestamps(); // Automatically creates created_at and updated_at as timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tools');
    }
};
