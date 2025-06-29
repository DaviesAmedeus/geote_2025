<?php

use App\Models\User;
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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained()->onDelete('cascade');;
            $table->string('title');
            $table->text('description');
            $table->string('image');
            $table->enum('status', ['completed', 'ongoing', 'pending']); // Could become enum or indexed
            $table->string('category'); // Could become enum or indexed
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->json('achievements')->nullable(); // For structured data
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
