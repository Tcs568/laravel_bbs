<?php

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

// use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('top');
});

Auth::routes();

Route::resource('articles', 'ArticleController');

Route::resource('users', 'UsersController');

Route::group(['middleware' => ['auth', 'can:admin']], function () {
    Route::get('/users', 'UsersController@index');
});
