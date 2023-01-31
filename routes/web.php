<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class,'index']);

Route::get('/info/', function (){
    return \View('info');
});

Route::get('/feedback/', function (){
    return \View('feedback');
});

Route::group(['prefix'=>'articles'],function() {
    Route::get('/', [ArticlesController::class, 'index']);

    Route::get('/categories/', [ArticlesController::class, 'categoriesList'])
        ->name('categories');

    Route::get('/categories/{id}/', [ArticlesController::class, 'getArticlesByCat'])
        ->where('id', '\d+')
        ->name('category');

    Route::get('/categories/{categoryId}/article/{id}', [ArticlesController::class, 'show'])
        ->where('id', '\d+')
        ->where('categoryId', '\d+')
        ->name('articleDetail');
});

