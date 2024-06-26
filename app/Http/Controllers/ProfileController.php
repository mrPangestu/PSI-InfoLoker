<?php

namespace App\Http\Controllers;

use App\Models\User;

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

        // Periksa jika pengguna ditemukan
        if (!$user) {
            // Penanganan jika pengguna tidak ditemukan
            return redirect()->route('login')->with('error', 'User not found.');
        }

        // Kirim data pengguna ke tampilan 'Profile.profil'
        return view('Profile.profil', compact('user'));
    }
    public function profil()
    {
        // Mendapatkan ID pengguna yang sedang login

    }

}
