<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function bukaprofil($id)
    {
        $user = User::findOrFail($id);
        return view('profile.show', compact('user'));
    }
}
