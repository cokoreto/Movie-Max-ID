<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('review_feed_replies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('review_feed_id')->constrained('review_feeds')->cascadeOnDelete();
            $table->foreignId('signup_id')->constrained('signups')->cascadeOnDelete();
            $table->foreignId('parent_reply_id')->nullable()->constrained('review_feed_replies')->cascadeOnDelete();
            $table->text('text');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('review_feed_replies');
    }
};
