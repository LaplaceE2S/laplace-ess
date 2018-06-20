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


// section messages
// vue boite de reception
Route::get('/boiteDeReception', 'MessagerieController@index')->name('allMessages');
// vue boite d'envoie
Route::get('/boiteDenvoi', 'MessagerieController@sendBox')->name('allMessagesSend');
// form nouveau message
Route::get('/nouveauMessage', 'MessagerieController@create')->name('formNewMessage');
// envoie message
Route::post('/store_new_message', 'MessagerieController@newStore')->name('store_new_message');
// Lire message 
Route::post('/read_message', 'MessagerieController@read')->name('read_message');
// form réponse
Route::post('/Form_answer_message', 'MessagerieController@formAnswer')->name('answer_form_message');
// envoie réponse
Route::post('/store_answer_message', 'MessagerieController@storeAnswer')->name('answer_message');

// section annonces
// view annonce index
Route::get('/annonces', 'ProposalsController@index')->name('UserProposalsIndex');

// Consultation d'une annonce

Route::get('proposal/voir_offre/{proposalId}', 'ProposalsController@voir_offre');
Route::get('proposal/voir_demande/{proposalId}', 'ProposalsController@voir_demande');

// recherche par compétence
Route::get('proposalBySkill/proposal', 'ProposalsController@searchRewrite');
Route::get('proposalBySkill/{id}', [
    'as' => 'proposal.bySkill',
    'uses' => 'ProposalsController@showBySkill',
]);
Route::get('proposal', 'ProposalsController@searchRewrite')->name('proposalBySkill');

// recherche par souscompétence
Route::get('proposalBySubSkill/proposal', 'ProposalsController@searchSubRewrite')->name('proposalBySubSkill');

Route::get('proposalBySubSkill/{id}', [
    'as' => 'proposal.bySkill',
    'uses' => 'ProposalsController@showBySubSkill',
]);

// création annonce
Route::get('proposal/new_offre/skill/{comp}', 'ProposalsController@formOffre');

Route::post('proposal/new_offre/', 'ProposalsController@store')->name('store_offre');

Route::get('proposal/new_demande/skill/{comp}', 'ProposalsController@formDemande');

Route::post('proposal/new_demande', 'ProposalsController@store')->name('store_demande');

// section utilisateurs-structures
// view structures
Route::get('structures', 'WelcomeController@structure')->name('structures');

// afficher les utilisateurs
Route::get('/utilisateurs', 'UsersController@index')->name('utilisateurs');

// créer un profil user
Route::get('/profil', 'UsersController@create')->name('profil');
Route::post('/profil', 'UsersController@store');

// affiche le profil de l'utilisateur
Route::get('/lireprofil', 'UsersController@show')->name('lireprofil');

//éditer le profil de l'utilisateur
Route::get('/editProfil', 'UsersController@edit')->name('editProfil');

//mise à jour du profil de l'utilisateur
Route::post('/editProfil', 'UsersController@update');

//vue supprimer le profil
Route::get('/supprimerProfil', 'UsersController@users')->name('deleteView');

//supprimer le profil
Route::post('supprimerCompte/{id}/profil', ['uses' => 'UsersController@destroy', 'as' => 'supprimerCompte.profil']);

// vue charte engagement
Route::get('/abonnement', 'UsersController@charte')->name('abonnement');

// demande d'abonnement
Route::get('/souscription', 'UsersController@askSubscription')->name('souscription');


// ADMIN
Route::group(['middleware' => ['is_admin']], function() {
    // dashboard admin
    Route::get('/admin', 'AdminController@index')->name('admin');
    
    // liste des inscrits
    Route::get('inscrits', 'AdminController@indexInscrits')->name('inscrits');

    // liste des abonnés
    Route::get('abonnes', 'AdminController@indexAbonnes')->name('abonnes');

    // liste des demandes d'abonnements
    Route::get('demandes', 'AdminController@indexDemandes')->name('demandes');

    // user devient abonne
    Route::get('demandes/{id}/Abonne', ['uses' => 'AdminController@updateRole', 'as' => 'voir.demandesAbonne']);
    
    // profil structure admin
    Route::get('profil/{id}/structure', ['uses' => 'AdminController@showUtilisateur', 'as' => 'voir.profilStructure']);

    //view profil admin
    Route::get('profilAdmin', 'AdminController@showProfil')->name('profilAdmin');

    });
    