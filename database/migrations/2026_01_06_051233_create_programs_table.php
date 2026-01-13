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
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');
            $table->enum('category', ['education', 'environment', 'community', 'health', 'disaster-relief', 'youth-development'])->default('community');
            $table->enum('status', ['planning', 'active', 'completed', 'paused'])->default('planning');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->decimal('target_amount', 15, 2)->nullable();
            $table->decimal('raised_amount', 15, 2)->default(0);
            $table->string('location')->nullable();
            $table->string('coordinator_name')->nullable();
            $table->string('coordinator_email')->nullable();
            $table->json('impact_metrics')->nullable(); // JSON object with metrics like "people_helped": 150
            $table->json('images')->nullable(); // Array of image URLs
            $table->text('objectives')->nullable();
            $table->text('challenges')->nullable();
            $table->text('success_stories')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};
