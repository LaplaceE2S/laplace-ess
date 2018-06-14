@extends('layouts.layout')

@section('title', 'Accueil')

@section('content')
 
 <div id="encart" class="pageheader-content">
            <div class="col-full welcomeBloc">

                <div class="featured">

                    <div class="featured__column featured__column--big">
                        <div class="entry" style="background-image:url('./images/img1.png');">
                            
                            <div class="entry__content">
                                <h1>Mutualisation, mise en réseau et mises à disposition, en toute simplicité</h1>

                                <div class="entry__info">
                                    <p>La Place est la solution pour rechercher des annonces, mutualiser des compétences et des emplois, que
                                    les structures de l'économie sociale et solidaire du Pays de Vannes ont choisi(e).</p>

                                    <span class="entry__category"><a href="{{ route('register')}}">Inscrivez-vous gratuitement</a></span>
                                </div>
                            </div> <!-- end entry__content -->
                            
                        </div> <!-- end entry -->
                    </div> <!-- end featured__big -->

                    <div class="featured__column featured__column--small">

                        <div class="entry" style="background-image:url('./images/cadre.jpg');">
                            
                            <div class="entry__content">
                                <span class="entry__category"><a href="#0">La place</a></span>
                                <p class="laplace">Venez découvrir le service.</p>

                            </div> <!-- end entry__content -->
                          
                        </div> <!-- end entry -->
                        @if(isset($annonce))
                        <div class="entry">
                          <div id="carouseloffres" class="col-12 carousel slide" data-ride="carousel">
                          <ol class="carousel-indicators">
                            <li data-target="#carouseloffres" data-slide-to="0" class="active"></li>
                            <li data-target="#carouseloffres" data-slide-to="1"></li>
                            <li data-target="#carouseloffres" data-slide-to="2"></li>
                          </ol>
                          <div class="carousel-inner carouOffre">
                            <div class="carousel-item carouOffre active">
                              <img class="d-block w-100" src="" alt="">
                              <div class="carousel-caption d-none d-md-block text-left">
                              <div class='row no-gutters'>
                              <h5 class="col-md-8">{{$annonce[0]['titre']}}</h5>
                              <p class="col-md-4">{{$annonce[0]['duree']->format('%a jour(s)')}}</p>
                              </div>
                              <p>{{$annonce[0]['type']}}</p>
                              <p>{{$annonce[0]['competence']}}</p>
                              <p>{{$annonce[0]['sousCompetence']}}</p>
                              <p>{{$annonce[0]['description']}}</p>
                              </div>
                            </div>
                            @if(isset($annonce[1]))
                            <div class="carousel-item carouOffre">
                              <img class="d-block w-100 carouOffre" src="" alt="">
                              <div class="carousel-caption d-none d-md-block text-left">
                              <div class='row no-gutters'>
                              <h5 class="col-md-8">{{$annonce[1]['titre']}}</h5>
                              <p class="col-md-4">{{$annonce[1]['duree']->format('%a jour(s)')}}</p>
                              </div>
                              <p>{{$annonce[1]['type']}}</p>
                              <p>{{$annonce[1]['competence']}}</p>
                              <p>{{$annonce[1]['sousCompetence']}}</p>
                              <p>{{$annonce[1]['description']}}</p>
                              </div>
                            </div>
                            @endif
                            @if(isset($annonce[2]))
                            <div class="carousel-item carouOffre">
                              <img class="d-block w-100 carouOffre" src="" alt="">
                              <div class="carousel-caption d-none d-md-block text-left">
                              <div class='row no-gutters'>
                              <h5 class="col-md-8">{{$annonce[2]['titre']}}</h5>
                              <p class="col-md-4">{{$annonce[2]['duree']->format('%a jour(s)')}}</p>
                              </div>
                              <p>{{$annonce[2]['type']}}</p>
                              <p>{{$annonce[2]['competence']}}</p>
                              <p>{{$annonce[2]['sousCompetence']}}</p>
                              <p>{{$annonce[2]['description']}}</p>
                              </div>
                            </div>
                            @endif
                          </div>
                          <a class="carousel-control-prev" href="#carouseloffres" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Précédent</span>
                          </a>
                          <a class="carousel-control-next" href="#carouseloffres" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Suivant</span>
                          </a>
                        </div>
                        </div>
                        @endif
                    </div> <!-- end featured__small -->
                </div> <!-- end featured -->

            </div> <!-- end col-full -->
        </div> <!-- end pageheader-content row -->

<br />

<!-- COMPETENCES -->

<div class="card-columns">
  <!-- Communication externe -->
  <div class="card">
    <div class="card-block">
      <h4 class="card-title">Communication externe</h4>
      <p class="card-text">vous préparez un événement, vous n'avez pas le temps de gérer votre communication,
      ou vous disposez de compétences pour élaborer une stratégie de communication, créer des flyers, affiches, etc.</p>
      <!-- button Communication externe -->
      <p>
    <button class="btn btn-secondary btn-lg btn-block" type="button" data-toggle="collapse" data-target="#1" aria-expanded="false" aria-controls="1">
    Sous-compétences
  </button>
</p>
<div class="collapse" id="1">
  <div class="card card-block">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Stratégie de communication externe</li>
    <li class="list-group-item">Gestion du site internet</li>
    <li class="list-group-item">Réalisation de supports de communication</li>
    <li class="list-group-item">Gestion des réseaux sociaux</li>
    <li class="list-group-item">Organisation d’événements</li>
    <li class="list-group-item">Gestion des mailing</li>
    <li class="list-group-item">Relation presse</li>
  </ul>
  </div>
</div>
    <!-- ./button Communication externe -->
    </div>
  </div>

  <!-- Ressource Humaine -->
  <div class="card">
    <div class="card-block">
      <h4 class="card-title">Ressources humaines</h4>
      <p class="card-text">vous souhaitez améliorer votre gestion des ressources humaines, déléguer certaines procédures,
      ou vous êtes spécialisés dans les relations entre bénévoles et salariés, dans le domaine de la santé au travail, etc</p>
           <!-- button Ressources humaines -->
           <p><button class="btn btn-secondary btn-lg btn-block" type="button" data-toggle="collapse" data-target="#2" aria-expanded="false" aria-controls="2">Sous-compétences</button></p>
      <div class="collapse" id="2">
        <div class="card card-block"> 
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Gestion de la convention collective</li>
            <li class="list-group-item">Paie et contrat de travail</li>
            <li class="list-group-item">La formation professionnelle des équipes en place</li>
            <li class="list-group-item">Le recrutement et procédure de licenciement de personnels</li>
            <li class="list-group-item">Le management / encadrement, suivi des salariés</li>
            <li class="list-group-item">Les relations entre bénévoles et salariés</li>
            <li class="list-group-item">Gestion de conflits</li>
            <li class="list-group-item">Le recours aux stagiaires</li>
            <li class="list-group-item">L’accompagnement à la retraite</li>
            <li class="list-group-item">Les risques psycho sociaux, la sécurité, le bien-être au travail</li>
          </ul>
        </div>
      </div>
    <!-- ./button Ressources humaines -->
    </div>
  </div>
  <!-- Stratégie et développement -->
  <div class="card">
    <div class="card-block">
      <h4 class="card-title">Stratégie et développement</h4>
      <p class="card-text">vous développez une nouvelle activité, vous avez besoin d'aide sur de la méthodologie de projet, dans votre recherche de financement, ou vous accompagnez les structures dans le développement de nouvelles activités, vous proposez des formations.</p>
<!-- button Stratégie et développement -->
<p><button class="btn btn-secondary btn-lg btn-block" type="button" data-toggle="collapse" data-target="#3" aria-expanded="false" aria-controls="3">Sous-compétences</button></p>
      <div class="collapse" id="3">
        <div class="card card-block"> 
          <ul class="list-group list-group-flush">
            <li class="list-group-item">La construction du budget en cohérence avec le projet de la structure</li>
            <li class="list-group-item">Méthodologie de création de nouvelles activités</li>
            <li class="list-group-item">Maîtriser les dispositifs d’aide financière</li>
            <li class="list-group-item">Répondre à des appels d’offre</li>
            <li class="list-group-item">Veille sur les appels d'offre</li>
            <li class="list-group-item">Rechercher des sources de financement, monter un dossier (en particulier fonds européens)</li>
            <li class="list-group-item">Etablir un budget prévisionnel, un plan de trésorerie, un plan de financement d’investissement</li>
          </ul>
        </div>
      </div>
    <!-- ./button Stratégie et développement -->
    </div>
  </div>
  <!-- Info générale -->
  <div class="card card-inverse p-3 text-center">
    <blockquote class="card-blockquote">
      <h2 style="color:#f49712;">Découvrez les Compétences et <br />Sous-compétence du service La Place</h2>
    </blockquote>
  </div>
  <!-- Gestion administrative et financière -->
  <div class="card">
    <div class="card-block">
      <h4 class="card-title">Gestion administrative et financière</h4>
      <p class="card-text">vous souhaitez vous concentrer sur votre cœur d'activité
      ou vous bénéficiez de temps disponible sur de l'aide administrative.</p>
      <!-- button Gestion administrative et financière -->
<p><button class="btn btn-secondary btn-lg btn-block" type="button" data-toggle="collapse" data-target="#4" aria-expanded="false" aria-controls="4">Sous-compétences</button></p>
      <div class="collapse" id="4">
        <div class="card card-block">          
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Gestion de la comptabilité générale ou analytique</li>
            <li class="list-group-item">Les assurances</li>
            <li class="list-group-item">Veille sur la réglementation</li>
          </ul>
        </div>
      </div>
    <!-- ./button Gestion administrative et financière -->
    </div>
  </div>
  <!-- Informatique -->
  <div class="card">
    <div class="card-block">
      <h4 class="card-title">Informatique</h4>
      <p class="card-text">vous souhaitez développer vos compétences numériques,
      ou vous proposez un appui en informatique.</p>
    </div>
    <!-- button Informatique -->
<p><button class="btn btn-secondary btn-lg btn-block" type="button" data-toggle="collapse" data-target="#5" aria-expanded="false" aria-controls="5">Sous-compétences</button></p>
      <div class="collapse" id="5">
        <div class="card card-block">          
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Hébergement sécurisé</li>
            <li class="list-group-item">Négociation de contrat</li>
            <li class="list-group-item">Appui informatique</li>
          </ul>
        </div>
      </div>
    <!-- ./button Informatique -->
  </div>
</div>
<!-- ./ COMPETENCES -->

</br>

<div id="infosEss" class="jumbotron jumbotron-fluid mx-0">
  <div class="container">
    <h5 class="h5">Vous êtes une structure de l'économie sociale et solidaire...</h5>
    <p class="lead">Associations, coopératives, mutuelles et entreprises solidaires de toutes les tailles et de tous les secteurs
    d'activités.
      Vous recherchez une compétence particulière pour développer votre activité et/ou vous souhaitez vous consacrer à votre projet associatif, coopératif, mutualiste.</p>
    <a href="{{ route('structures') }}" class="btn btn-warning">Comment ça marche</a>
  </div>
</div>

<!-- LOGO SLIDER -->
<div class="container">  
  <h2 class="sliderTitle">Nos partenaires</h2>
      </br>
  <section class="customer-logos slider" id='fcontainer'>
    
    <div class="slide">
      <a href="https://www.pays-vannes.fr/"><img src="./images/logo_partenaires/1.PaysdeVannes.jpg" height="80" width="80" alt=""></a>
    </div>
    <div class="slide">
    <a href="https://europa.eu/european-union/index_fr"><img src="./images/logo_partenaires/2.FESI_logoRVB.jpg" height="80" width="80" alt=""></a>
    </div>
    <div class="slide">
      <a href="http://www.bretagne.bzh/"><img src="./images/logo_partenaires/3.Logo_region_bretagne.jpeg" height="80" width="80" alt=""></a>
    </div>
    <div class="slide">
      <a href="http://direccte.gouv.fr/"><img src="./images/logo_partenaires/4.Logo_direccte.jpg" height="80" width="80" alt=""></a>
    </div>
    <div class="slide">
      <a href="https://www.ess-bretagne.org/"><img src="./images/logo_partenaires/5.Cress-bretagne.jpg" height="80" width="80" alt=""></a>
    </div>
    <div class="slide">
      <a href="http://www.golfedumorbihan-vannesagglomeration.bzh/"><img src="./images/logo_partenaires/6.Vannes-agglo-le-nouveau-logo.jpg" height="80" width="80" alt=""></a>
    </div>
    <div class="slide">
      <a href="https://www.maif.fr/"><img src="./images/logo_partenaires/7.Maif.jpg" height="80" width="80" alt=""></a>
    </div>
  </section>
</div>

<br />

@endsection