<?php

use App\Http\Controllers\Blog\BlogController;
use App\Http\Controllers\Project\ProjectController;
use App\Http\Controllers\Testimonial\TestimonialController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('blog')->group(function(){
    Route::get('', [BlogController::class, 'fetch']);
    Route::get('/{slug}' , [BlogController::class, 'single']);
});

Route::prefix('project')->group(function(){
    Route::get('', [ProjectController::class, 'fetch']);
    Route::get('/{slug}' , [ProjectController::class, 'single']);
});

Route::prefix('testimonial')->group(function(){
    Route::get('', [TestimonialController::class, 'fetch']);
});
