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
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->text('description');
            $table->string('image');
            $table->enum('status', ['completed', 'ongoing', 'pending']); // Could become enum or indexed
            $table->string('category')->default('none'); // Could become enum or indexed
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->json('achievements')->nullable(); // For structured data
            $table->string('pdf_link')->nullable(); //link (Taking the user to the google sheet of the project)
            $table->string('other_imgs')->nullable(); //link (Taking the user to the google repository for project images)
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
