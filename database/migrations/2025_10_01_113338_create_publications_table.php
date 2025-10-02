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
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('overview');
            $table->string('image');
            $table->string('reference_numbers');
            $table->json('authors')->nullable();
            $table->enum('status', [0, 1]);
            $table->string('category')->nullable()->default('none');
            $table->string('publication_link')->nullable();
            $table->date('end_date')->nullable();
            $table->foreignId('author_id')->nullable()->constrained('users')->nullOnDelete();
            // $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publications');
    }
};
