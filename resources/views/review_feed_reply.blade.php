@php
    $profilePhoto = ($reply->user && isset($reply->user->photo) && $reply->user->photo) ? asset('storage/' . $reply->user->photo) : asset('/img/avatar.png');
    $username = $reply->user && isset($reply->user->username) ? $reply->user->username : 'User';
    $isOwner = session('user_id') == $reply->signup_id;
    $indent = 24 * ($level + 1);
@endphp
<div style="position: relative; margin-left: {{ $indent }}px; margin-top: 10px;">
    @if($level > 0)
        <!-- L-shaped thread line (shorter) -->
        <!-- L-shaped thread line with rounded corner -->
    @endif
    <div style="background: transparent; border-radius: 10px; padding: 16px 18px; border: none;">
        <div style="display: flex; align-items: center; margin-bottom: 8px;">
            <img src="{{ $profilePhoto }}" alt="Profile" style="width: 32px; height: 32px; object-fit: cover; border-radius: 50%; margin-right: 10px; border: 2px solid #2d8cf0;">
            <span style="font-weight: bold; font-size: 1em;">{{ $username }}</span>
            <span style="margin-left: 8px; color: #aaa; font-size: 0.95em;">{{ $reply->created_at->diffForHumans() }}</span>
        </div>
        <div style="margin-bottom: 8px; font-size: 1.05em; line-height: 1.5;">
            {!! preg_replace('/@([A-Za-z0-9_\.]+)/', '<span style="color:#2d8cf0;font-weight:bold;">@$1</span>', e($reply->text)) !!}
        </div>
        <div style="display: flex; gap: 10px;">
            @if($isOwner)
                <form action="{{ route('review_feed.reply.destroy', $reply->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="background: #e74c3c; color: #fff; padding: 10px 32px; border-radius: 8px; font-size: 1.2em; border: none;">
                        <i class="fas fa-trash"></i>
                    </button>
                </form>
            @endif
            <button onclick="
                var form = document.getElementById('reply-form-{{ $reply->id }}');
                form.style.display='block';
                var textarea = form.querySelector('textarea[name=\'text\']');
                textarea.value='@<?php echo addslashes($username); ?> ';
                textarea.focus();
            " style="background: #2d8cf0; color: #fff; padding: 10px 32px; border-radius: 8px; font-size: 1.2em; border: none;">
                <i class="fas fa-reply"></i>
            </button>
        </div>
        <!-- Reply form -->
        <div id="reply-form-{{ $reply->id }}" style="display:none; margin-top:10px;">
            <form action="{{ route('review_feed.reply.store') }}" method="POST">
                @csrf
                <input type="hidden" name="review_feed_id" value="{{ $reply->review_feed_id }}">
                <input type="hidden" name="parent_reply_id" value="{{ $reply->id }}">
                <textarea name="text" style="width:100%; border-radius:8px; border:1px solid #333; padding:10px; background:#222; color:#fff; margin-bottom:8px;" placeholder="Reply..." required></textarea>
                <button type="submit" style="background:#2d8cf0; color:#fff; padding:7px 22px; border-radius:8px; font-weight:bold; border:none;">Kirim</button>
                <button type="button" onclick="document.getElementById('reply-form-{{ $reply->id }}').style.display='none'" style="background:#333; color:#fff; padding:7px 22px; border-radius:8px; font-weight:bold; border:none; margin-left:8px;">Batal</button>
            </form>
        </div>
        <!-- Nested replies -->
        @if($reply->replies->count())
            <div style="margin-top:10px;">
                @foreach($reply->replies as $child)
                    @include('review_feed_reply', ['reply' => $child, 'level' => $level + 1])
                @endforeach
            </div>
        @endif
    </div>
</div>
