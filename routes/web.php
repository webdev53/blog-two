<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;

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


Route::get('/', [HomeController::class, 'index'])->name('home');

//post detail
Route::get('/posts/{post:slug}', [PostsController::class, 'show'])->name('posts.show');

//about
Route::get('/about', function () {
    return view('about');
})->name('about');

//contact
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

require __DIR__.'/auth.php';
