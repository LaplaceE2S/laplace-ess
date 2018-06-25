@extends('layouts.layout')

@section('title', 'Accueil')

@section('content')
 
 <div id="encart" class="pageheader-content">
            <div class="col-full welcomeBloc">

                <div class="featured">

                    <div class="featured__column featured__column--big">
                        <div class="entry" style="background-image:url('./images/img1.png');">
                            
                            <div class="entry__content">
                                <h1>« Échangez des compétences et partagez des emplois, en toute simplicité. »</h1>

                                <div class="entry__info">
                                    <p>La Place est la solution à vos besoins de mutualisation.<br>Offrez et demandez des compétences dans l'économie sociale et solidaire.<br>Recherchez des annonces dès votre première inscription.</p>

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
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h4>Communication externe:</h4>
      <p>vous souhaitez communiquer sur votre projet et vous n'en avez pas le temps</p>
      <p>OU</p> 
      <p>vous disposez de compétences pour élaborer une stratégie de communication, créer des flyers, affiches, etc.</p>
    </div>

    <div class="col-md-12">
      <h4>Ressources humaines:</h4>
      <p>vous souhaitez améliorer votre gestion des ressources humaines,</p>
      <p>OU</p> 
      <p>vous êtes spécialisés dans les relations entre bénévoles et salariés, dans le domaine de la santé au travail, etc.</p>
    </div>

    <div class="col-md-12">
      <h4>Stratégie et développement:</h4>
      <p>vous développez une nouvelle activité, vous avez besoin d'aide dans votre recherche de financement,</p>
      <p>OU</p> 
      <p>vous accompagnez les structures dans le développement de nouvelles activités.</p>
    </div>

    <div class="col-md-12">
      <h4>Gestion administrative et financière:</h4>
      <p>vous souhaitez vous concentrer sur votre cœur d'activité</p>
      <p>OU</p> 
      <p>vous bénéficiez de temps disponible sur de l'aide administrative</p>
    </div>

    <div class="col-md-12">
      <h4>Informatique:</h4>
      <p>vous souhaitez développer vos compétences numériques,</p>
      <p>OU</p> 
      <p>vous proposez un appui en informatique.</p>
    </div>


  </div> <!-- ./row -->
</div>

</br>

<div id="infosEss" class="jumbotron jumbotron-fluid mx-0">
  <div class="container">
    <h5 class="h5">Associations, coopératives, mutuelles et entreprises solidaires de toutes les tailles et de tous les secteurs d'activités.</h5>
    <p class="lead">Vous recherchez une compétence particulière pour développer votre activité, de manière ponctuelle ou continue mais à temps partiel.<br> Vous souhaitez améliorer l'efficacité de votre structure, en allégeant la charge de travail des salarié-e-s sur les fonctions supports.</p><p class="lead">Vous disposez de compétences à partager et/ou de temps salarié disponible.<br>Vous souhaitez consolider ou pérenniser l'emploi dans votre structure.</p><p class="lead"><mark>" Déposez une annonce !"</mark></p>
    <a href="{{ route('structures') }}" class="btn btn-warning">Comment ça marche</a>
  </div>
</div>

<!-- LOGO SLIDER -->
<div class="container">  
  <h2 class="sliderTitle">Nos partenaires</h2>
      </br>
  <section class="customer-logos slider" id='fcontainer'>
    
    <div class="slide">
      <a href="https://www.pays-vannes.fr/"><img src="./images/logo_partenaires/1.PaysdeVannes.jpg" height="50" width="50" alt="pays-vannes"></a>
    </div>
    <div class="slide">
    <a href="https://europa.eu/european-union/index_fr"><img src="./images/logo_partenaires/2.FESI_logoRVB.jpg" height="50" width="50" alt="europe"></a>
    </div>
    <div class="slide">
      <a href="http://www.bretagne.bzh/jcms/l_22662/fr/promouvoir-une-economie-sociale-et-solidaire"><img src="./images/logo_partenaires/3.Logo_region_bretagne.jpeg" height="50" width="50" alt="bretagne"></a>
    </div>
    <div class="slide">
      <a href="http://bretagne.direccte.gouv.fr/l-Economie-sociale-et-solidaire-ESS-en-Bretagne"><img src="./images/logo_partenaires/4.Logo_direccte.jpg" height="50" width="50" alt="direccte"></a>
    </div>
    <div class="slide">
      <a href="https://www.ess-bretagne.org/demarche-regionale-qualite-de-lemploi-dans-less"><img src="./images/logo_partenaires/5.Cress-bretagne.jpg" height="50" width="50" alt="ess"></a>
    </div>
    <div class="slide">
      <a href="http://www.golfedumorbihan-vannesagglomeration.bzh/actions-de-developpement-economique"><img src="./images/logo_partenaires/6.Vannes-agglo-le-nouveau-logo.jpg" height="50" width="50" alt="golfedumorbihan"></a>
    </div>
    <div class="slide">
      <a href="https://ess.maif.fr/ess-action"><img src="./images/logo_partenaires/7.Maif.jpg" height="50" width="50" alt="maif"></a>
    </div>
    <div class="slide">
      <a href="http://greta-bretagne.ac-rennes.fr/portail/web/greta-de-bretagne-sud/vannes"><img src="./images/logo_partenaires/greta.png" height="50" width="50" alt="greta bretagne sud"></a>
    </div>
  </section>
</div>

<br />

@endsection