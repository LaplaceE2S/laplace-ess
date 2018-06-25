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

Route::get('proposal/voir_offre/{proposalId}', 'ProposalsController@voir_offre')->name('voir_offre');;
Route::get('proposal/voir_demande/{proposalId}', 'ProposalsController@voir_demande')->name('voir_demande');;

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
// form de mise a jour des annonce
Route::post('proposal/update_form_offre', 'ProposalsController@updateFormOffre')->name('update_offre_form');
Route::post('proposal/update_form_demande', 'ProposalsController@updateFormDemande')->name('update_demande_form');
//mise a jour des annonce
Route::post('proposal/update_offre', 'ProposalsController@updateOffre')->name('update_offre');
Route::post('proposal/update_demande', 'ProposalsController@updateDemande')->name('update_demande');
//Supression
Route::post('proposal/destroy_offre', 'ProposalsController@destroy')->name('destroy_offre');
Route::post('proposal/destroy_demande', 'ProposalsController@destroy')->name('destroy_demande');
//vue gestion annonce
//en attente
Route::get('proposal/en_attente', 'ProposalsController@attente')->name('proposalAttente');
//publié
Route::get('proposal/publie', 'ProposalsController@publie')->name('proposalPublie');
//archivé
Route::get('proposal/archive', 'ProposalsController@archive')->name('proposalArchive');

// section utilisateurs-structures
// view structures
Route::get('structures', 'WelcomeController@structure')->name('structures');

// afficher les utilisateurs
Route::get('/utilisateurs', 'UsersController@index')->name('utilisateurs');

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

    // vérification des abonnements
    Route::get('abonnements', 'AdminController@verifAbonnement')->name('abonnements');

    // renouvelement de l'abonnement d'une structure
    Route::get('renouvelement/{id}/Abonnement', ['uses' => 'AdminController@renewAbonnement', 'as' => 'voir.renouvelementAbonnement']);

    // user devient abonne
    Route::get('demandes/{id}/Abonne', ['uses' => 'AdminController@updateRole', 'as' => 'voir.demandesAbonne']);
    
    // profil structure admin
    Route::get('profil/{id}/structure', ['uses' => 'AdminController@showUtilisateur', 'as' => 'voir.profilStructure']);

    //Menu admin
    Route::get('profilAdmin', 'AdminController@showProfil')->name('profilAdmin');

    //view profil admin
    Route::get('/profilAdministrateur', 'AdminController@showAdmin')->name('profilAdministrateur');

    //view modifiez profil admin 
    Route::get('editAdmin', 'AdminController@editProfil')->name('editAdmin');

    //Update profil admin
    Route::post('/editAdmin', 'AdminController@update');

    // vue convention
    Route::get('/convention', 'AdminController@convention')->name('convention');

    // vue avenant
    Route::get('/avenant', 'AdminController@avenant')->name('avenant');

    //espace annonce
    //annonce en attente de validation
    Route::get('/proposalUnvalidAdmin', 'ProposalsController@adminWait')->name('proposalUnvalidAdmin');
    //annonce en archivé
    Route::get('/proposalArchiveAdmin', 'ProposalsController@adminArchive')->name('proposalArchiveAdmin');
    //validation d'annone
    Route::post('/validProposal', 'ProposalsController@valid')->name('valid');
    //dévalidation d'annonce
    Route::post('/unvalidProposal', 'ProposalsController@unvalid')->name('unvalid');
    });

    // vue convention
    Route::get('/convention', 'UsersController@convention')->name('convention');

    // vue avenant
    Route::get('/avenant', 'UsersController@avenant')->name('avenant');

    // vue La Place
    Route::get('/laplace', 'WelcomeController@service')->name('laplace');

    // vue Le Pole
    Route::get('/lepole', 'WelcomeController@assoc')->name('lepole');

    // vue Partenaires
    Route::get('/partenaires', 'WelcomeController@partenassoc')->name('partenaires');
    