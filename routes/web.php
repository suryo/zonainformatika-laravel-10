<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LandingController::class, 'index'])->name('landing');


// Route untuk menampilkan form registrasi
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
// Route untuk menghandle proses registrasi
Route::post('/register', [AuthController::class, 'register']);

// Route untuk menampilkan form login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
// Route untuk menghandle proses login
Route::post('/login', [AuthController::class, 'login']);

// Route untuk menghandle proses logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route untuk menampilkan form forgot password
Route::get('/forgot-password', [AuthController::class, 'showForgotPasswordForm'])->name('forgot-password');
// Route untuk menghandle proses forgot password
Route::post('/forgot-password', [AuthController::class, 'forgotPassword']);