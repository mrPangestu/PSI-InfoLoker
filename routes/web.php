<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\JobController;

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

Route::post('/login', [MainController::class, 'login'])->name('login');

Route::get('/profile/{id}', [ProfileController::class, 'show']);


Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create');
Route::post('/', [JobController::class, 'store'])->name('jobs.store');

Route::get('/jobs/detail', [MainController::class, 'detail'])->name('job.detail');
Route::get('/job/add', [MainController::class, 'add'])->name('job.add');
Route::get('/', [MainController::class, 'index'])->name('jobs.index');
