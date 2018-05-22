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
Route::get('/utilisateurs', 'UsersController@liste');

// créer un profil user
Route::get('/profil', 'UsersController@create')->name('profil');

Route::post('/profil', function () {
    $structure = App\Companies::create([
            'structure' => request('structure'),
            'statut' => request('statut'),
            'budget' => request('budget'),
            'siret' => request('siret'),
            'rue' => request('rue'),
            'postal' => request('postal'),
            'ville' => request('ville'),
            'nom' => request('nom'),
            'prenom' => request('prenom'),
            'tel' => request('telephone'),
            'url' => request('url'),
    ]);

    return "Nous avons reçu votre profil qui est " . request('structure') . ' et votre nom est ' . request('nom');
});