<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ContentController;

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

Route::get('/login', [MainController::class, 'showLoginForm'])->name('login');
Route::post('/login', [MainController::class, 'login']);
Route::post('/logout', [MainController::class, 'logout'])->name('logout');

Route::post('/register', [MainController::class, 'regis'])->name('user.reg');


Route::post('/login', [MainController::class, 'login'])->name('login');


Route::post('/', [JobController::class, 'store'])->name('jobs.store');

Route::get('/jobs/detail', [MainController::class, 'detail'])->name('job.detail');
Route::get('/', [MainController::class, 'index'])->name('jobs.index');

Route::delete('/jobs/{job}', [JobController::class, 'destroy'])->name('jobs.destroy');

Route::middleware(['auth'])->group(function () {
    Route::get('/job/add', [MainController::class, 'add'])->name('job.add');
    Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create');
    Route::get('/Profile/profil',[ProfileController::class, 'bukaprofil'])->name('Profile.profil');
    Route::get('/Profile/profil/{id}', [ProfileController::class, 'profil'])->name('profil.show');
});
Route::middleware(['auth', 'admin'])->group(function () {

});
Route::get('/job/sort/', [JobController::class, 'sortAllJob'])->name('sortAll.job');
Route::get('/job/sort/{jobdesc_id}', [JobController::class, 'sortJob'])->name('sort.job');


