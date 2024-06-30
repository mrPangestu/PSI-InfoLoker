<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ContentController;
use App\Http\Middleware\Auth;

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
Route::get('/jobs/detail/form', function () {
    return view('jobs.job-detail');
});

Route::get('/login', [MainController::class, 'showLoginForm'])->name('login');
Route::post('/login', [MainController::class, 'login']);
Route::post('/logout', [MainController::class, 'logout'])->name('logout');

Route::post('/register', [MainController::class, 'regis'])->name('user.reg');


Route::post('/login', [MainController::class, 'login'])->name('login');


Route::post('/', [JobController::class, 'store'])->name('jobs.store');

Route::get('/jobs/detail/{jobs_id}', [JobController::class, 'detailId'])->name('job.detail');
Route::get('/jobs/detail/', [JobController::class, 'detailContent'])->name('job.detailcontent');
Route::get('/', [JobController::class, 'index'])->name('jobs.index');

Route::delete('/jobs/{job}', [JobController::class, 'destroy'])->name('jobs.destroy');

Route::post('/jobs/apply', [JobController::class, 'applyJob'])->name('jobs.apply');
Route::middleware(['auth'])->group(function () {
    Route::get('/Profile/profil',[ProfileController::class, 'bukaprofil'])->name('Profile.profil');
    Route::get('/Profile/profil/{id}', [ProfileController::class, 'profil'])->name('profil.show');
});
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create');
    Route::post('/job/add', [JobController::class, 'addJob'])->name('job.add');

});
Route::get('/jobs/sort/{jobdesc_id?}', [JobController::class, 'sortJob'])->name('jobs.sort');
Route::get('/jobs/search', [JobController::class, 'search'])->name('jobs.search');

