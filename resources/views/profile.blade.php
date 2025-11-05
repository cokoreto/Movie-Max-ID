<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="/assets/profile/css/style.css">
    <script src="/assets/profile/js/script.js"></script>
</head>
<body>
    <img src="/img/logo.png" alt="logo" style="width: 40%" />
    <div class="profile-container">
        <h2>Edit Profile</h2>
        @if(session('success'))
            <p style="color:limegreen">{{ session('success') }}</p>
        @endif
        @if($errors->any())
            <ul style="color:red">
                @foreach($errors->all() as $e)
                    <li>{{ $e }}</li>
                @endforeach
            </ul>
        @endif
        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Foto Profile -->
            <div style="text-align:center; margin-bottom:18px; position:relative;">
                @php
                    $user = \App\Models\Signup::find(session('user_id'));
                    $profilePhoto = ($user && $user->photo) ? asset('storage/' . $user->photo) : asset('/img/avatar.png');
                @endphp

                <!-- foto dibungkus wrapper, tambahkan span.icon untuk pensil -->
                <label for="photoInput" class="photo-wrapper" style="cursor:pointer; display:inline-block;">
                    <img src="{{ $profilePhoto }}" alt="Profile" class="profile-photo" id="profilePhotoPreview" title="Klik untuk mengganti foto">
                    <span class="edit-icon" aria-hidden="true">✎</span>
                </label>

                <input type="file" name="photo" id="photoInput" style="display:none;" accept="image/*">
            </div>
            <!-- Username -->
            <div>
                <label>Username:</label>
                <input type="text" name="username" value="{{ old('username', $user->username) }}" required>
            </div>
            <!-- Password -->
            <div>
                <label>Password Baru:</label>
                <input type="password" name="password" placeholder="Ganti Password">
            </div>
            <button type="submit">Simpan</button>
        </form>
        <a href="/moviepage">Kembali ke Movie Page</a>
    </div>
    <!-- Footer start-->
    <footer>
        <div class="credit">
            <p>Movie Max Indonesia | &copy; 2024.</p>
        </div>
    </footer>
    <!-- Footer end-->
</body>
</html>

