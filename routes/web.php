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

// section annonces
// view annonce index
Route::get('/annonces', 'ProposalsController@index')->name('UserProposalsIndex');


// view structures
Route::get('structures', 'WelcomeController@structure')->name('structures');

// afficher les utilisateurs
Route::get('/utilisateurs', 'UsersController@index')->name('utilisateurs');

// créer un profil user
Route::get('/profil', 'UsersController@create')->name('profil');
Route::post('/profil', 'UsersController@store');

// liste les utilisateurs
Route::get('utilisateurs', 'UsersController@index')->name('utilisateurs');

// affiche le profil de l'utilisateur
Route::get('/lireprofil', 'UsersController@show')->name('lireprofil');

//éditer le profil de l'utilisateur
Route::get('/editProfil', 'UsersController@edit')->name('editProfil');

//mise à jour du profil de l'utilisateur
Route::post('/editProfil', 'UsersController@update');

//vue supprimer le profil
Route::get('/supprimerProfil', 'UsersController@users');

//supprimer le profil
Route::post('supprimerCompte/{id}/profil', ['uses' => 'UsersController@destroy', 'as' => 'supprimerCompte.profil']);

// recherche par compétence
Route::get('proposalBySkill/proposal', 'ProposalsController@searchRewrite');
Route::get('proposalBySkill/{id}', [
    'as' => 'proposal.bySkill',
    'uses' => 'ProposalsController@showBySkill',
]);
Route::get('proposal', 'ProposalsController@searchRewrite')->name('proposalBySkill');
// recherche par souscompétence

Route::get('proposalBySubSkill/proposal', 'ProposalsController@searchSubRewrite')->name('proposalBySubSkill');;
Route::get('proposalBySubSkill/{id}', [
    'as' => 'proposal.bySkill',
    'uses' => 'ProposalsController@showBySubSkill',
]);

// Consultation d'une annonce

Route::get('proposal/voir_offre/{proposalId}', 'ProposalsController@voir_offre');
Route::get('proposal/voir_demande/{proposalId}', 'ProposalsController@voir_demande');

// création annonce
Route::get('proposal/new_offre/skill/{comp}', 'ProposalsController@formOffre');

Route::post('proposal/new_offre/', 'ProposalsController@store')->name('store_offre');

Route::get('proposal/new_demande/skill/{comp}', 'ProposalsController@formDemande');

Route::post('proposal/new_demande', 'ProposalsController@store')->name('store_demande');


// ADMIN
Route::group(['middleware' => ['is_admin']], function() {
    // dashboard admin
    Route::get('/admin', 'AdminController@index')->name('admin');
    
    // dashboard admin
    Route::get('/adminProposals', 'AdminController@indexProposals')->name('adminProposals');
        
    // dashboard admin actu
    //index
    Route::get('/adminActu', 'ActuCatController@index')->name('adminCatActu');
    
    // soumission du formulaire de création de catégorie d'actualités
    Route::post('/catActu', 'ActuCatController@store')->name('catActu');
    });
    