<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingController;

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\FrontArticleController;
use App\Http\Controllers\FrontProjectController;

use App\Http\Controllers\MessageController;

use App\Http\Controllers\Backend\DashboardController;

use App\Http\Controllers\Backend\CourseController;
use App\Http\Controllers\Backend\CourseCategoryController;
use App\Http\Controllers\Backend\CourseDetailController;
use App\Http\Controllers\Backend\CourseRoadmapController;
use App\Http\Controllers\Backend\CourseTechnologyController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\OrderDetailController;
use App\Http\Controllers\Backend\UserController;

use App\Http\Controllers\Backend\ArticleCategoryController;
use App\Http\Controllers\Backend\ArticleController;
use App\Http\Controllers\Backend\ProjectController;
use App\Http\Controllers\LogActivityController;


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

Route::get('/checkout-info', [CheckoutController::class, 'checkoutInfo'])->name('checkout.info');
// Route::post('/checkout/submitApproval', [CheckoutController::class, 'submitApproval'])->name('checkout.submitApproval');
Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');

Route::get('/article', [FrontArticleController::class, 'index'])->name('article');
Route::get('/article/{id}', [FrontArticleController::class, 'showArticle'])->name('article.detail');
Route::get('/project', [FrontProjectController::class, 'index'])->name('project');
Route::get('/project/{id}', [FrontProjectController::class, 'showProject'])->name('project.detail');

Route::get('messages/{userId?}', [MessageController::class, 'index'])->name('messages.index');
Route::get('messages/create', [MessageController::class, 'create'])->name('messages.create');
// Route::get('messages/{id}', [MessageController::class, 'fetchMessages'])->name('messages.fetch');
Route::post('messages', [MessageController::class, 'store'])->name('msg.store');
Route::get('messages/{message}', [MessageController::class, 'show'])->name('messages.show');
// Route::post('messages', [MessageController::class, 'sendMessage'])->name('messages.send');



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


Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('users', UserController::class);

Route::resource('courses', CourseController::class);
Route::resource('course_categories', CourseCategoryController::class);
Route::get('/course/{slug}/list', [CourseDetailController::class, 'listcoursedetail'])->name('coursesdetail.list');
Route::get('/course/{course_id}/details/create', [CourseDetailController::class, 'create'])->name('coursedetail.create');
Route::post('/course/{course_id}/details/store', [CourseDetailController::class, 'store'])->name('coursedetail.store');
Route::get('/course/{course}/details/{course_detail_id}/edit', [CourseDetailController::class, 'edit'])->name('coursedetail.edit');
Route::post('/course/{course_id}/details/update', [CourseDetailController::class, 'update'])->name('coursedetail.update');
Route::post('/course/{course_id}/details/{course_detail_id}/destroy', [CourseDetailController::class, 'destroy'])->name('coursedetail.destroy');

Route::get('/coursesearch', [LandingController::class, 'search'])->name('course.search');

Route::put('/course/{id}/updateStatus', [CourseController::class, 'updateStatus'])->name('courses.updateStatus');

Route::put('/orders/{id}/updatePaymentStatus', [OrderController::class, 'updatePaymentStatus'])->name('orders.updatePaymentStatus');
Route::put('/orderdetails/{id}', [OrderDetailController::class, 'updateStatus'])->name('orderdetails.update');



Route::resource('course_roadmaps', CourseRoadmapController::class);
Route::resource('course_technologies', CourseTechnologyController::class);
Route::resource('roadmaps', CourseRoadmapController::class);
Route::resource('orders', OrderController::class);

Route::resource('dashboard/articlecategory', ArticleCategoryController::class);
Route::resource('dashboard/article', ArticleController::class);
Route::resource('dashboard/project', ProjectController::class);
Route::get('/log-activity', [LogActivityController::class, 'index'])->name('log-activity.index');

Route::get('/landing', [LandingController::class, 'landing'])->name('newlanding');
