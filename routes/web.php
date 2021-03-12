<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\PagesController;
use App\Http\Controllers\Backend\PostCategoriesController;
use App\Http\Controllers\Backend\PostCommentsController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/',                 [FrontendController::class, 'index'])->name('index');
Route::get('/profile',          [FrontendController::class, 'profile'])->name('profile');


Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::group(['middleware' => ['role:admin|supervisor']], function () {

        Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
            Route::get('/',         [AdminController::class, 'dashboard'])->name('index');
            Route::get('/maps',     [AdminController::class, 'maps'])->name('maps');
            Route::get('/settings', [AdminController::class, 'settings'])->name('settings');
            Route::get('/tables',   [AdminController::class, 'tables'])->name('tables');

            Route::resource('posts', PostController::class);
            Route::resource('post_comments', PostCommentsController::class);
            Route::resource('post_categories', PostCategoriesController::class);
            Route::resource('pages', PagesController::class);



        });

    });


});
