<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Signup;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function edit(Request $request)
    {
        $user = Signup::find(session('user_id'));
        return view('profile', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Signup::find(session('user_id'));

        $request->validate([
            'username' => 'required|string|unique:signups,username,' . $user->id,
            'photo' => 'nullable|image|max:2048',
            'password' => 'nullable|string|min:6',
        ]);

        $user->username = $request->username;

        if ($request->hasFile('photo')) {
            if ($user->photo && Storage::disk('public')->exists($user->photo)) {
                Storage::disk('public')->delete($user->photo);
            }
            $user->photo = $request->file('photo')->store('profile', 'public');
        }

        if ($request->password) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        session(['username' => $user->username]);

        return redirect('/profile')->with('success', 'Profile berhasil diupdate!');
    }
}
