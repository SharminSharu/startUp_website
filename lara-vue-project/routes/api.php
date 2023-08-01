<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\VendorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::middleware('auth:sanctum')->get('/list', [UserController::class,'index']);


    Route::resource('about',AboutController::class);
    Route::resource('service',ServiceController::class);
    Route::resource('team',TeamController::class);
    Route::resource('slider',SliderController::class);
    Route::resource('vendor',VendorController::class);
    Route::resource('review',ReviewController::class);
    Route::resource('quote',QuoteController::class);
    Route::resource('contact',ContactController::class);
    Route::resource('blog',BlogController::class);
    Route::resource('com',CommentController::class);
    Route::resource('gn',GeneralController::class);
    Route::resource('email',EmailController::class);


    Route::get('search', [SearchController::class, 'index']);



