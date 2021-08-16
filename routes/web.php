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
    Route::get('/show/{id}', [NewsController::class, 'show'])
    ->where('id', '\d+')
    ->name('news.show');

});

Route::get('/feedback', [FeedbackController::class 'index.feedback'])
->name('feedback.index');
Route::post('/feedback', [FeedbackController::class 'send'])
->name('feedback.send');
