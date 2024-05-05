<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingController;

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;

use App\Http\Controllers\Backend\DashboardController;

use App\Http\Controllers\Backend\CourseController;
use App\Http\Controllers\Backend\CourseCategoryController;
use App\Http\Controllers\Backend\CourseDetailController;
use App\Http\Controllers\Backend\CourseRoadmapController;
use App\Http\Controllers\Backend\CourseTechnologyController;



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
Route::get('/about', [LandingController::class, 'about'])->name('about');
Route::get('/services', [LandingController::class, 'services'])->name('services');
Route::get('/contact', [LandingController::class, 'contact'])->name('contact');
Route::get('/course/{id}', [LandingController::class, 'showCourse'])->name('course.detail');
Route::resource('carts', CartController::class);
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::post('/checkout/requestjoin', [CheckoutController::class, 'requestjoin'])->name('checkout.requestjoin');
// Route::post('/checkout/submitApproval', [CheckoutController::class, 'submitApproval'])->name('checkout.submitApproval');




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


Route::get('dashboard', [DashboardController::class,'index'])->name('dashboard');
Route::resource('courses', CourseController::class);
Route::resource('course_categories', CourseCategoryController::class);
// Route::resource('course_details', CourseDetailController::class);
Route::get('/course/{slug}/list', [CourseDetailController::class, 'listcoursedetail'])->name('coursesdetail.list');
Route::get('/course/{course_id}/details/create', [CourseDetailController::class,'create'])->name('coursedetail.create');
Route::post('/course/{course_id}/details/store', [CourseDetailController::class,'store'])->name('coursedetail.store');
Route::post('/course/{course_id}/details/edit', [CourseDetailController::class,'edit'])->name('coursedetail.edit');
Route::get('/course/{course_id}/details/update', [CourseDetailController::class,'update'])->name('coursedetail.update');
Route::post('/course/{course_id}/details/detail', [CourseDetailController::class,'destroy'])->name('coursedetail.destroy');


Route::resource('course_roadmaps', CourseRoadmapController::class);
Route::resource('course_technologies', CourseTechnologyController::class);
Route::resource('roadmaps', CourseRoadmapController::class);
