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

Auth::routes();

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('/', 'HomeController@index');

    Route::get('/page/{page}', 'HomeController@page');
});

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'dashboard', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', 'DashboardController@index');
    Route::resource('menus', 'MenuController')->except([
        'show'
    ]);
    Route::resource('pages', 'PageController')->except([
        'show'
    ]);
});
