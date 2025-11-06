<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->foreignId('genre_id')->constrained('genres')->onDelete('cascade');
            $table->float('rating_avg')->default(0);
            $table->string('poster')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('movies');
    }
};
