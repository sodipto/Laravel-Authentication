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
// ,  'middleware' => ['adminmiddleware']
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Route::group(['prefix' => 'admin'], function()
// {

//    Route::get('register', 'Admin\RegisterController@showRegistrationForm');
//    Route::post('register', 'Admin\RegisterController@register')->name('admin.register');

// //loginsssss

//  Route::get('login', 'Admin\LoginController@showLoginForm');
//  Route::post('login', 'Admin\LoginController@login')->name('admin.login');
//  Route::get('logout', 'Admin\LoginController@logout');
// });
