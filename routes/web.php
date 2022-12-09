<?php

use App\Http\Livewire\Auth\Register;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\AppointmentController;

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
Route::get('/', [SiteController::class, 'landing']);
Route::get('/register', [AuthController::class, 'registerForm']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'loginForm'])->name('login');

Route::post('/login', [AuthController::class, 'login']);
//Route::post('/', [AuthController::class, 'login']);
Route::get('/verification/{user}/{token}', [AuthController::class, 'verification']);

Route::group(['middleware' => ['auth', 'verified']], function(){

    Route::get('/home', [AppointmentController::class, 'index']);
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::get('/edit/{appointment}', [AppointmentController::class, 'edit']);
    Route::get('/delete/{appointment}', [AppointmentController::class, 'destroy']);
    Route::get('/logs', [SiteController::class, 'logs']);
    Route::get('/posts', [PostController::class, 'index']);
});


