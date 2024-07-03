<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\apply;
use App\Models\favorite;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function bukaprofil()

    {
        $userId = Auth::id();

        // Temukan pengguna berdasarkan ID
        $user = User::find($userId);
        $applyHistory = apply::where('user_id', $userId)->count();
        $favoritejob = favorite::where('user_id', $userId)->count();

        // Periksa jika pengguna ditemukan
        if (!$user) {
            // Penanganan jika pengguna tidak ditemukan
            return redirect()->route('login')->with('error', 'User not found.');
        }

        // Kirim data pengguna ke tampilan 'Profile.profil'
        return view('Profile.profil', compact('user','applyHistory','favoritejob'));
    }

}
