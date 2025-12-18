<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewFeed extends Model
{
    use HasFactory;

    protected $fillable = [
        'signup_id',
        'movie_id',
        'caption',
        'rating',
    ];

    protected $casts = [
        'rating' => 'float',
    ];

    public function user()
    {
        return $this->belongsTo(Signup::class, 'signup_id');
    }

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    public function replies()
    {
        // Only top-level replies (not nested)
        return $this->hasMany(ReviewFeedReply::class)
            ->whereNull('parent_reply_id')
            ->with(['user', 'replies']);
    }
}
