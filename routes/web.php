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

use App\Models\Post;
use App\Models\Category;

Route::get('/createpost', function(){

  $post = Post::create([
    'title'=>'This is a title',
    'excerpt' => 'This is a excerpt',
    'slug' => 'This is a slug', 
    'body' => 'This is a body',
    'user_id' => 1,
    'category_id' => Category::create(['name'=>'Education', 'slug'=>'education'])->id
  ]);

  $post->image()->create(['name'=>'random file', 'extension'=>'jpg', 'path'=>'/image/random_file.jpg']);
});

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/post', function () {
    return view('post');
})->name('post');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

require __DIR__.'/auth.php';
