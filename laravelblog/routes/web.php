<?php

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
Route::get('/', [\App\Http\Controllers\PagesController::class, 'index'])->name('index');
Route::get('/blog', [\App\Http\Controllers\PostsController::class, 'index'])->name('blog');
Route::get('/blog/create', [\App\Http\Controllers\PostsController::class, 'create'])->name('blog.create');
Route::post('blog/store',  [\App\Http\Controllers\PostsController::class, 'store'])->name('blog.store');
Route::get('blog/{slug}', [\App\Http\Controllers\PostsController::class, 'show'])->name('blog.show');
Route::get('blog/{slug}/edit', [\App\Http\Controllers\PostsController::class, 'edit'])->name('blog.edit');
Route::post('blog/{slug}/update', [\App\Http\Controllers\PostsController::class, 'update'])->name('blog.update');
Route::get('blog/{slug}/remove', [\App\Http\Controllers\PostsController::class, 'destroy'])->name('blog.remove');

//Route::resource('/blog', [\App\Http\Controllers\PostsController::class]);

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

