<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
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

Route::get('/',function(){
    return redirect() -> route ('articles.index');
});
Route::get('/articles', [ArticleController::class, 'index']) -> name ('articles.index');
Route::get('/articles/detail', function () {
    return 'Article Detail';
    })-> name('articles.detail');

Route::get('/articles/detail/{id}',[ArticleController::class,'detail']);

Route::get('/articles/more',function(){
    return redirect()->route('articles.detail');
});