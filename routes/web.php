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

// raccourci affiche vue
Route::view('/', 'welcome');

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
    
// dashboard admin actu
//index
Route::get('/adminActu', 'ActuCatController@index')    
    ->middleware('is_admin')    
    ->name('adminCatActu');

// soumission du formulaire de création de catégorie d'actualités
Route::post('/catActu', 'ActuCatController@store')->name('catActu');

// view structures
Route::get('structures', 'WelcomeController@structure')->name('structures');

// afficher les utilisateurs
Route::get('/utilisateurs', 'UsersController@index')->name('utilisateurs');

// créer un profil user
Route::get('/profil', 'UsersController@create')->middleware('auth')->name('profil');
Route::post('/profil', 'UsersController@store')->middleware('auth');

// liste les utilisateurs
Route::get('utilisateurs', 'UsersController@index')->name('utilisateurs')->middleware('auth');

// affiche le profil de l'utilisateur
Route::get('/lireprofil', 'UsersController@show')->middleware('auth')->name('lireprofil');

<<<<<<< HEAD
=======
// lire le profil user
Route::get('lireprofil', 'UsersController@show')->name('lireprofil');

// recherche par compétence
Route::get('proposal', function (Request $request) {
    $priorityID = $request->get('comp');
    dd($priorityID);
    return 'id comp: '.$priorityID;
})->name('proposalBySkill');
>>>>>>> 151917781f596093d949867894c7149f69b3251e
