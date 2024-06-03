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

use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\TestCrudController;

use App\Http\Controllers\Api\MessageController;

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

Route::get('projects', [ProjectController::class, 'index']);
Route::post('projects', [ProjectController::class, 'store']);
Route::get('projects/{id}', [ProjectController::class, 'show']);
Route::put('projects/{id}', [ProjectController::class, 'update']);
Route::delete('projects/{id}', [ProjectController::class, 'destroy']);

Route::get('testcrud', [TestCrudController::class, 'index']);
Route::post('testcrud', [TestCrudController::class, 'store']);
Route::get('testcrud/{id}', [TestCrudController::class, 'show']);
Route::put('testcrud/{id}', [TestCrudController::class, 'update']);
Route::delete('testcrud/{id}', [TestCrudController::class, 'destroy']);



Route::apiResource('messages', MessageController::class);



Route::post('login', [LoginController::class, 'index']);
Route::group(['middleware' => ['jwt.verify']], function () {
    Route::post('/logout', [LogoutController::class, 'index']);
});
