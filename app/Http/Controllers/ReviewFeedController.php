<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\ReviewFeed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewFeedController extends Controller
{
    public function index()
    {
        // Protect review feed for unauthenticated users (session-based)
        if (!session('user_id')) {
            return redirect('/login');
        }
        $movies = Movie::query()->select(['id','title','poster'])->orderBy('title')->get();
        $feeds = ReviewFeed::query()
            ->with(['user','movie','replies'])
            ->orderByDesc('created_at')
            ->paginate(10);

        return view('review_feed', compact('movies', 'feeds'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'caption' => ['required','string','max:5000'],
            'movie_id' => ['required','exists:movies,id'],
            'rating' => ['required','numeric','min:0','max:10'],
        ]);

        $signupId = session('user_id');
        if (!$signupId) {
            return redirect()->back()->withErrors(['auth' => 'Silakan login terlebih dahulu.']);
        }

        ReviewFeed::create([
            'signup_id' => $signupId,
            'movie_id' => $validated['movie_id'],
            'caption' => $validated['caption'],
            'rating' => $validated['rating'],
        ]);

        return redirect()->route('review_feed.index')->with('success', 'Review diposting.');
    }

    public function edit(ReviewFeed $review_feed)
    {
        if (!session('user_id')) {
            return redirect('/login');
        }
        $movies = Movie::query()->select(['id','title','poster'])->orderBy('title')->get();
        $feed = $review_feed->load(['user','movie']);

        $this->authorizeOwner($feed);

        return view('review_feed_edit', compact('feed', 'movies'));
    }

    public function update(Request $request, ReviewFeed $review_feed)
    {
        if (!session('user_id')) {
            return redirect('/login');
        }
        $this->authorizeOwner($review_feed);

        $validated = $request->validate([
            'caption' => ['required','string','max:5000'],
            'movie_id' => ['required','exists:movies,id'],
            'rating' => ['required','numeric','min:0','max:10'],
        ]);

        $review_feed->update($validated);

        return redirect()->route('review_feed.index')->with('success', 'Review diperbarui.');
    }

    public function destroy(ReviewFeed $review_feed)
    {
        if (!session('user_id')) {
            return redirect('/login');
        }
        $this->authorizeOwner($review_feed);
        $review_feed->delete();
        return redirect()->route('review_feed.index')->with('success', 'Review dihapus.');
    }

    protected function authorizeOwner(ReviewFeed $feed): void
    {
        $signupId = session('user_id');
        abort_unless($signupId && $signupId == $feed->signup_id, 403, 'Aksi ini hanya untuk pemilik.');
    }
}
