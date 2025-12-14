<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('review_feeds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('signup_id')->constrained('signups')->cascadeOnDelete();
            $table->foreignId('movie_id')->constrained('movies')->cascadeOnDelete();
            $table->text('caption');
            $table->decimal('rating', 3, 1); // 0.0 - 10.0
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('review_feeds');
    }
};
