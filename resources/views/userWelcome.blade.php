<?php 
use App\User;

$type = Auth::user()->type;

?>

@extends('layouts.userLayout')
@section('title', 'Accueil')
@section('content')

@if($type == 0)
<!-- Message quand utilisateur type = 0 inscrit -->
<div class="row">
  <div class="col-12">
  <h1 class="text-center">Bienvenue sur votre espace de connexion</h1>
  </div>
  <div class="col-6" style="margin:auto;">
  <img src="./images/accueilvisuel.png" alt="visuel accueil" height="500" width="500"/>
  </div>
  <div class="col-4">
  <p>Recherchez des annonces par compétences.</p>
  <p>Modifiez et complétez vos données de profil.</p>
  <p>Contactez-nous à tout moment.</p>
  </div>
</div>
@endif

@if($type == 1)
<!-- Message quand utilisateur type = 1 abonne -->
<div class="row">
  <div class="col-12">
  <h1 class="text-center">Bienvenue sur votre espace membre</h1>
  </div>
  <div class="col-6" style="margin:auto;">
  <img src="./images/accueilvisuel.png" alt="visuel accueil" height="500" width="500"/>
  </div>
  <div class="col-4">
  <p>Recherchez des annonces dans leur intégralité.</p>
  <p>Publiez des annonces par compétences.</p>
  <p>Dialoguez entre structures abonnées depuis une annonce.</p>
  <p>Créez et stockez vos fiches récapitulatives de mutualisation.</p>
  <p>Accédez aux documents juridiques fournis par La Place.</p>
  <p>Contactez-nous à tout moment.</p>
  <p>A vous de jouer !</p>
  </div>
</div>
@endif

@if($type == 2)
<!-- Message quand admin type = 2 admin-->
<div class="row">
  <div class="col-12">
  <h1 class="text-center">Bienvenue dans ton espace d'administration !</h1>
  </div>
  <div class="col-6" style="margin:auto;">
  <img src="./images/accueilvisuel.png" alt="visuel accueil" height="500" width="500"/>
  </div>
  <div class="col-4">
  <p>Recherche des annonces.</p>
  <p>Modère les annonces des structures abonnées.</p>
  <p>Suis les inscriptions.</p>
  <p>Valide les abonnements.</p>
  <p>Dialogue avec les structures abonnées.</p>
  <p>Reçois les fiches récapitulatives de mutualisation.</p>
  <p>A toi de jouer !</p>
  </div>
</div>
@endif

@endsection