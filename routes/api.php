<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\LogoutController;

use App\Http\Controllers\Api\CourseController;
use App\Http\Controllers\Api\CourseCategoryController;
use App\Http\Controllers\Api\CourseDetailController;
use App\Http\Controllers\Api\CourseRoadmapController;
use App\Http\Controllers\Api\CourseTechnologyController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('coursecategories', [CoursecategoryController::class, 'index']);
Route::get('coursecategories/{id}', [CoursecategoryController::class, 'show']);

Route::get('course', [CourseController::class, 'index']);

Route::post('login', [LoginController::class, 'index']);
Route::group(['middleware' => ['jwt.verify']], function () {
    Route::post('/logout', [LogoutController::class, 'index']);
});
