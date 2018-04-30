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
Route::get('/', 'WelcomeController@index');

// demande du formulaire
Route::get('users', 'UsersController@getInfos');

// soumission du formulaire
Route::post('users', 'UsersController@postInfos');

// demande du formulaire
Route::get('contact', 'ContactController@getForm');

// soumission du formulaire
Route::post('contact', 'ContactController@postForm');
