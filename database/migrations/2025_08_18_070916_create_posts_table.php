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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->string('slug')->unique();
            $table->longText('content')->nullable();
            $table->text('excerpt')->nullable(); //A description
            $table->json('achievements')->nullable(); // For structured data

            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            $table->foreignId('subcategory_id')->nullable()->constrained()->cascadeOnDelete();

            // Status
            $table->enum('status', ['draft', 'published', 'archived'])->default('draft');

            // Event-specific
            $table->dateTime('start_date')->nullable();
            $table->dateTime('end_date')->nullable();
            $table->string('location')->nullable();
            $table->string('registration_url')->nullable();

            // Media
            $table->string('cover_image')->nullable();
            $table->string('images_repository')->nullable();
             $table->string('pdf_link')->nullable();
            $table->json('attachments')->nullable();

            // Meta
            $table->foreignId('author_id')->nullable()->constrained('users')->nullOnDelete();
            $table->string('seo_title')->nullable();
            $table->string('seo_description')->nullable();
            $table->unsignedBigInteger('views_count')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
