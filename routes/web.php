<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;

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
#Articles
Route::get('/', [ArticleController::class, 'index']);
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/detail', function () {
    return 'Article Detail';
})->name('articles.detail');

Route::get('/articles/detail/{id}', [ArticleController::class, 'detail'])->name('articles.detail');

Route::get('/articles/more', function () {
    return redirect()->route('articles.detail');
});

Route::get('/articles/add', [ArticleController::class, 'add']);
Route::post('/articles/add', [ArticleController::class, 'create']);
Route::get('/articles/delete/{id}', [ArticleController::class, 'delete'])->name('articles.delete');

#Comments
Route::post('/comments/add',[CommentController::class,'create']);
Route::get('/comments/delete/{id}',[CommentController::class,'delete']);

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');