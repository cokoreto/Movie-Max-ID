<?php

namespace App\Http\Controllers;

use App\Models\ReviewFeed;
use App\Models\ReviewFeedReply;
use Illuminate\Http\Request;

class ReviewFeedReplyController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'review_feed_id' => ['required','exists:review_feeds,id'],
            'parent_reply_id' => ['nullable','exists:review_feed_replies,id'],
            'text' => ['required','string','max:5000'],
        ]);

        $signupId = session('user_id');
        if (!$signupId) {
            return redirect()->back()->withErrors(['auth' => 'Silakan login terlebih dahulu.']);
        }

        ReviewFeedReply::create([
            'review_feed_id' => $validated['review_feed_id'],
            'signup_id' => $signupId,
            'parent_reply_id' => $validated['parent_reply_id'] ?? null,
            'text' => $validated['text'],
        ]);

        return redirect()->route('review_feed.index')->with('success', 'Balasan dikirim.');
    }

    public function destroy(ReviewFeedReply $reply)
    {
        $signupId = session('user_id');
        abort_unless($signupId && $signupId == $reply->signup_id, 403, 'Aksi ini hanya untuk pemilik.');

        $reply->delete();
        return redirect()->route('review_feed.index')->with('success', 'Balasan dihapus.');
    }
}
