<?php

use App\Http\Controllers\Admin\AppController;
use App\Http\Controllers\Admin\Auth\AdminAuthController;
use App\Http\Controllers\Admin\Auth\AdminTestimonialController;
use App\Http\Controllers\Admin\Blog\BlogAdminController;
use App\Http\Controllers\Admin\Project\ProjectAdminController;
use Illuminate\Support\Facades\Route;

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

Route::get('login', [AppController::class, 'login'])->name('login');
Route::post('login', [AdminAuthController::class, 'login']);
Route::get('seed-admin', [AdminAuthController::class, 'seedAdmin']);

Route::middleware('auth')->group(function(){
    Route::post('register', [AdminAuthController::class, 'register']);
    Route::get('admins', [AppController::class, 'admins']);

    Route::get('', [AppController::class, 'dashboard']);

    Route::prefix('blog')->group(function(){
        Route::get('', [BlogAdminController::class, 'fetchBlogPosts']);
        Route::get('/{single}', [BlogAdminController::class, 'fetchSinglePost']);
        Route::post('/create', [BlogAdminController::class, 'createBlogPosts']);
        Route::post('/update', [BlogAdminController::class, 'updateBlogPost']);
        Route::post('/delete', [BlogAdminController::class, 'deleteBlogPost']);
        Route::post('/suspend', [BlogAdminController::class, 'suspendBlogPost']);
    });

    Route::prefix('projects')->group(function(){
        Route::get('', [ProjectAdminController::class, 'fetchProjects']);
        Route::get('/{single}', [ProjectAdminController::class, 'fetchSingleProject']);
        Route::post('create', [ProjectAdminController::class, 'createProject']);
        Route::post('update', [ProjectAdminController::class, 'updateProject']);
        Route::post('/delete', [ProjectAdminController::class, 'deleteProject']);
        Route::post('/suspend', [ProjectAdminController::class, 'suspendProject']);
    });

    Route::prefix('testimonials')->group(function(){
        Route::get('', [AdminTestimonialController::class, 'fetchTestimonials']);
        Route::post('/create', [AdminTestimonialController::class, 'createTestimonial']);
        Route::post('/update', [AdminTestimonialController::class, 'updateTestimonial']);
        Route::post('/delete', [AdminTestimonialController::class, 'deleteTestimonial']);
        Route::post('/suspend', [AdminTestimonialController::class, 'suspendTestimonial']);
    });
});
