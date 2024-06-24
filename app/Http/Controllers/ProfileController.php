<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function bukaprofil()
    {
        return view('Profile.profil');
    }

}
