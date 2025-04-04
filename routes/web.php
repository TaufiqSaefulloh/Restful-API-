<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostController;

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

Route::get('/', action: function () {
    return view('layouts.app');
});
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', function () {
    return view('posts.create');
})->name('posts.create');


Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{post}/edit', function (App\Models\Post $post) {
    return view('posts.edit', compact('post'));
})->name('posts.edit');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');