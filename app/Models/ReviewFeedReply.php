<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewFeedReply extends Model
{
    use HasFactory;

    protected $fillable = [
        'review_feed_id',
        'signup_id',
        'parent_reply_id',
        'text',
    ];

    public function feed()
    {
        return $this->belongsTo(ReviewFeed::class, 'review_feed_id');
    }

    public function user()
    {
        return $this->belongsTo(Signup::class, 'signup_id');
    }

    public function replies()
    {
        // Child replies of this reply
        return $this->hasMany(self::class, 'parent_reply_id')
            ->with(['user', 'replies']);
    }
}
