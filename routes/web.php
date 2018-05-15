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
Route::get('welcome', 'WelcomeController@index')->name('welcome');
Route::get('/', 'WelcomeController@index');

// demande du formulaire
Route::get('contact', 'ContactController@getForm')->name('contact');

// soumission du formulaire
Route::post('contact', 'ContactController@postForm')->name('confirm');
// soumission du formulaire telephone
Route::post('tel_contact', 'ContactController@store')->name('confirm_tel');

// Authentification
Auth::routes();

// dashboard user
Route::get('/home', 'HomeController@index')->name('home');

// dashboard admin
Route::get('/admin', 'AdminController@index')    
    ->middleware('is_admin')    
    ->name('admin');



