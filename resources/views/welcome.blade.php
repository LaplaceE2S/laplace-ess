@extends('layouts.layout')

@section('title')
accueil
@endsection

@section('content')
 
 <div id="encart" class="pageheader-content row">
            <div class="col-full">

                <div class="featured">

                    <div class="featured__column featured__column--big">
                        <div class="entry" style="background-image:url('./images/img1.jpg');">
                            
                            <div class="entry__content">
                                <span class="entry__category"><a href="#0">Music</a></span>

                                <h1><a href="#0" title="">What Your Music Preference Says About You and Your Personality.</a></h1>

                                <div class="entry__info">

                                    <ul class="entry__meta">
                                        <li><a href="#0">John Doe</a></li>
                                        <li>December 29, 2017</li>
                                    </ul>
                                </div>
                            </div> <!-- end entry__content -->
                            
                        </div> <!-- end entry -->
                    </div> <!-- end featured__big -->

                    <div class="featured__column featured__column--small">

                        <div class="entry" style="background-image:url('./images/img3.jpg');">
                            
                            <div class="entry__content">
                                <span class="entry__category"><a href="#0">Offres</a></span>

                                <p class="actu"><a href="#0" title="">The Pomodoro Technique Really Works.</a></p>

                            </div> <!-- end entry__content -->
                          
                        </div> <!-- end entry -->

                        <div class="entry" style="background-image:url('./images/img2.jpg');">

                            <div class="entry__content">
                                <span class="entry__category"><a href="#0">Actu</a></span>

                                <p class="actu"><a href="#0" title="">Throwback To The Good Old Days.</a></p>
                            </div> <!-- end entry__content -->

                        </div> <!-- end entry -->

                    </div> <!-- end featured__small -->
                </div> <!-- end featured -->

            </div> <!-- end col-full -->
        </div> <!-- end pageheader-content row -->

    </section> <!-- end s-pageheader -->



</br>
<!-- Accordion -->
<div class="container">
  <!-- Title Competences -->
  <div class="accordion-option">
    <h3 class="title">Compétences</h3>
  </div>

  <div class="clearfix"></div>
  
  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <!-- bloc communication externe -->
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Communication externe
        </a>
      </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body">
        <table class="table">
  <thead>
    <tr>
      <th scope="row">Stratégie de communication externe</th>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Gestion du site internet</th>
    </tr>
    <tr>
      <th scope="row">Réalisation de supports de communication</th>
    </tr>
    <tr>
      <th scope="row">Gestion des réseaux sociaux</th>
    </tr>
    <tr>
      <th scope="row">Organisation d’événements</th>
    </tr>
    <tr>
      <th scope="row">Gestion des mailing</th>
    </tr>
    <tr>
      <th scope="row">Relation presse</th>
    </tr>
  </tbody>
</table>
        </div>
      </div>
      </div>
    
    <!-- bloc Stratégie et développement -->
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingTwo">
        <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          Stratégie et développement
        </a>
      </h4>
      </div>
      <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
        <div class="panel-body">
        <table class="table">
  <thead>
    <tr>
      <th scope="row">La construction du budget en cohérence avec le projet de la structure </th>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Méthodologie de création de nouvelles activités</th>
    </tr>
    <tr>
      <th scope="row">Maîtriser les dispositifs d’aide financière</th>
    </tr>
    <tr>
      <th scope="row">Répondre à des appels d’offre</th>
    </tr>
    <tr>
      <th scope="row">Veille sur les appels d'offre</th>
    </tr>
    <tr>
      <th scope="row">Rechercher des sources de financement, monter un dossier (en particulier fonds européens) </th>
    </tr>
    <tr>
      <th scope="row">Etablir un budget prévisionnel, un plan de trésorerie, un plan de financement d’investissement</th>
    </tr>
  </tbody>
</table>
        </div>
      </div>
    </div>
    <!-- bloc Gestion administrative et financière -->
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingThree">
        <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
          Gestion administrative et financière
        </a>
      </h4>
      </div>
      <div id="collapseThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree">
        <div class="panel-body">
        <table class="table">
  <thead>
    <tr>
      <th scope="row">Gestion de la comptabilité générale ou analytique</th>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Les assurances</th>
    </tr>
    <tr>
      <th scope="row">Veille sur la réglementation</th>
    </tr>
  </tbody>
</table>
        </div>
      </div>
      <!-- bloc Ressources humaines -->
      <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingFour">
        <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
          Ressources humaines
        </a>
      </h4>
      </div>
      <div id="collapseFour" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingFour">
        <div class="panel-body">
        <table class="table">
  <thead>
    <tr>
      <th scope="row">Gestion de la convention collective</th>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Paie et contrat de travail</th>
    </tr>
    <tr>
      <th scope="row">La formation professionnelle des équipes en place</th>
    </tr>
    <tr>
      <th scope="row">Le recrutement et procédure de licenciement de personnels</th>
    </tr>
    <tr>
      <th scope="row">Le management / encadrement, suivi des salariés</th>
    </tr>
    <tr>
      <th scope="row">Les relations entre bénévoles et salariés</th>
    </tr>
    <tr>
      <th scope="row">Gestion de conflits</th>
    </tr>
    <tr>
      <th scope="row">Le recours aux stagiaires</th>
    </tr>
    <tr>
      <th scope="row">L’accompagnement à la retraite</th>
    </tr>
    <tr>
      <th scope="row">Les risques psycho sociaux, la sécurité , le bien-être au travail</th>
    </tr>
  </tbody>
</table>
        </div>
      </div>
      </div>
      <!-- bloc Informatique -->
      <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingFive">
        <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
          Informatique
        </a>
      </h4>
      </div>
      <div id="collapseFive" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingFive">
        <div class="panel-body">
        <table class="table">
  <thead>
    <tr>
      <th scope="row">Hébergement sécurisé</th>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Achat groupé</th>
    </tr>
    <tr>
      <th scope="row">Négociation de contrat</th>
    </tr>
    <tr>
      <th scope="row">Appui informatique</th>
    </tr>
  </tbody>
</table>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- /.container -->

</br>

<div id="infosEss" class="jumbotron jumbotron-fluid">
  <div class="container">
    <h5 class="h5">Associations, coopératives, mutuelles et entreprises solidaires de toutes les tailles et de tous les secteurs d'activités.</h5>
    <p class="lead">Vous recherchez une compétence particulière pour développer votre activité et/ou vous souhaitez vous consacrer à votre projet associatif, coopératif, mutualiste. Ou vous disposez de compétences à partager et/ou de temps salarié disponible. Vous souhaitez déposer une annonce pour mutualiser une compétence ou un emploi. Inscrivez-vous au service La Place, plate-forme innovante de mutualisation de compétences et d'échanges entre les structures de l'ESS.</p>
    <a href="{{ route('structures') }}" class="btn btn-warning">Découvrez comment ça marche</a>
  </div>
</div>

<!-- LOGO SLIDER -->
<div class="container">  
  <h2>Nos partenaires</h2>
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
    <div class="slide">
      <img src="./images/logo_partenaires/Logo_Copil.png" height="80" width="80" alt="">
    </div>
  </section>
</div>

<br />

@endsection