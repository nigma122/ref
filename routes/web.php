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

use App\Http\Controllers\NewsController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;




Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function (){
Route::resource('categories', AdminCategoryController::class);
Route::resource('news', AdminNewsController::class);
});



Route::group(['prefix' =>'news'], function (){
    Route::get('/', [NewsController::class, 'index'])
    ->name('news');
    Route::get('/category', [NewsController::class, 'category'])
    ->name('news.category');
    Route::get('/show/{news}', [NewsController::class, 'show'])
    ->where('news', '\d+')
    ->name('news.show');
});


Route::get('/delete/{id}', [NewsController::class, 'delete'])
->name('delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
