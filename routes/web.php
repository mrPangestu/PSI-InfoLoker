<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/log', function () {
    return view('Akun.regis');
});

Route::post('/register', [MainController::class, 'regis'])->name('user.reg');

Route::get('Profile/profil',[ProfileController::class, 'bukaprofil'])->name('Profile.profil');

Route::post('/login', [MainController::class, 'login'])->name('login');

