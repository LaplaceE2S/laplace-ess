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

// view Home
Route::get('/welcome', 'WelcomeController@index');
Route::get('/', 'WelcomeController@index');
// demande du formulaire
Route::get('users', 'UsersController@getInfos');

// soumission du formulaire
Route::post('users', 'UsersController@postInfos');

// demande du formulaire
Route::get('contact', 'ContactController@getForm')->name('contact');

// soumission du formulaire
Route::post('contact', 'ContactController@postForm');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function () {

    return view('admin');

});

Route::get('/userWelcome', function () {

    return view('userWelcome');

});