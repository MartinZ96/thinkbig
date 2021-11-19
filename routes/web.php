<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\SourceController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\FavoriteController;
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

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'article'], function(){
   Route::get('', [ArticleController::class, 'index'])->name('article.index');
});
Route::group(['prefix' => 'source'], function(){
   Route::get('', [SourceController::class, 'index'])->name('source.index');
});
Route::group(['prefix' => 'detail'], function(){
   Route::get('', [DetailController::class, 'index'])->name('detail.index');
});
Route::group(['prefix' => 'favorite'], function(){
   Route::get('', [FavoriteController::class, 'index'])->name('favorite.index');
});