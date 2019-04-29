<?php

use Illuminate\Http\Request;

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

Route::group(['namespace' => 'Admin', 'prefix' => '/admin'], function () {
    Route::get('/add', 'AddArticle@someMethod');
    Route::get('/delete', 'DeleteArticle@someMethod');
});

Route::group(['namespace' => 'Usere', 'prefix' => '/users'], function () {
    Route::get('/some', 'SomeController@someMethod');
});

Route::get('/', 'TestController@showPost');
