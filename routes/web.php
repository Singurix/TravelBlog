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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello/', function () {
    return 'hello world';
});

Route::get('/info/', function () {
    return 'this is info page';
});

Route::get('/articles/', function () {
    return 'this is articles page';
});

Route::get('/article/{id}', function (int $id) {
    return "Статья с ID - {$id}";
});
