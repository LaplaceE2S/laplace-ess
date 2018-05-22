@extends('layouts.userLayout')
@section('title')
Créer son profil
@endsection
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h1>{{ __("Créer une proposition") }}</h1></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('home') }}">
                        @csrf
                        <div class="row justify-content-left"><h4>Renseignements sur la proposition<h4></div>
                        <!-- label type -->
                        <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!} row">
                        <div class='col-md-4 col-form-label text-md-right'>
                        {!! Form::label('type', 'type :') !!}
                        </div>
                        <div class="col-md-6">
                        {!! Form::label('type2', ' demande ou offre') !!}
                        </div>
                        </div>

                        <!-- label Titre -->
                        <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!} row">
                        <div class='col-md-4 col-form-label text-md-right'>
                        {!! Form::label('titreL', 'Entrez un titre : ') !!}
                        </div>
                        <div class="col-md-6">
                        {!! Form::text('titre', null, ['class' => 'form-control']) !!}

                        {!! $errors->first('titre', '<small class="help-block">:message</small>') !!}
                        </div>
                        </div>

                        <!-- label Compétence -->
                        <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!} row">
                        <div class='col-md-4 col-form-label text-md-right'>
                        {!! Form::label('competenceL', 'choisssez une competence') !!}
                        </div>
                        <div class="col-md-6">
                        {!! Form::select('competence', array(
                            'Communication externe' => array('com' => 'Stratégie de communication externe','Gestion du site internet','Réalisation de supports de communication','Gestion des réseaux sociaux','Organisation d’événements','Gestion des mailing','Relation presse'),
                            'Stratégie et développement' => array('Strat' => 'La construction du budget en cohérence avec le projet de la structure','Méthodologie de création de nouvelles activités','Maîtriser les dispositifs d’aide financière',"Répondre à des appels d'offre","Veille sur les appels d'offre",'Rechercher des sources de financement', 'monter un dossier','Etablir un budget prévisionnel', 'un plan de trésorerie', "un plan de financement d’investissement"),
                            'Gestion administrative et financière' => array('Gestion' => "Gestion de la comptabilité générale ou analytique","Les assurances","Veille sur la réglementation"),
                            'Ressources humaines' => array('rh' =>"Gestion de la convention collective","Paie et contrat de travail","La formation professionnelle des équipes en place","Le recrutement et procédure de licenciement de personnels","Le management / encadrement, suivi des salariés","Les relations entre bénévoles et salariés","Gestion de conflits","Le recours aux stagiaires", "L’accompagnement à la retraite","Les risques psycho sociaux, la sécurité , le bien-être au travail"),
                            'Informatique' => array('Informatique' => "Hébergement sécurisé","Achat groupé","Négociation de contrat","Appui informatique")
                        ), ['class' => 'form-control']) !!}

                        {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
                        </div>
                        </div>

                        <!-- label debut -->
                        <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!} row">
                        <div class='col-md-4 col-form-label text-md-right'>
                        {!! Form::label('debutL', 'Selectionnez la date de début de mission: ') !!}
                        </div>
                        <div class="col-md-6">
                        {!! Form::date('debut', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}

                        {!! $errors->first('debut', '<small class="help-block">:message</small>') !!}
                        </div>
                        </div>

                        <!-- label fin -->
                        <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!} row">
                        <div class='col-md-4 col-form-label text-md-right'>
                        {!! Form::label('finL', 'Selectionnez la date de fin de mission: ') !!}
                        </div>
                        <div class="col-md-6">
                        {!! Form::date('fin', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}

                        {!! $errors->first('fin', '<small class="help-block">:message</small>') !!}
                        </div>
                        </div>

                        <!-- label archivage -->
                        <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!} row">
                        <div class='col-md-4 col-form-label text-md-right'>
                        {!! Form::label('archivageL', "Selectionnez la date d'expiration de l'annonce:" ) !!}
                        </div>
                        <div class="col-md-6">
                        {!! Form::date('archivage', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}

                        {!! $errors->first('archivage', '<small class="help-block">:message</small>') !!}
                        </div>
                        </div>

                        <!-- label fréquence -->
                        <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!} row">
                        <div class='col-md-4 col-form-label text-md-right'>
                        {!! Form::label('frequenceL', 'fréquence : ') !!}
                        </div>
                        <div class="col-md-6">
                        {!! Form::label('semaineL', 'semaine : ') !!}
                        {!! Form::radio('frequence', 'value', ['class' => 'form-control']) !!}
                        {!! Form::label('moisL', 'mois : ') !!}
                        {!! Form::radio('frequence', 'value', ['class' => 'form-control']) !!}
                        {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
                        </div>
                        </div>

                        <!-- label heure -->
                        <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!} row">
                        <div class='col-md-4 col-form-label text-md-right'>
                        {!! Form::label('heureL', "Entrez le nombre d'heure :" ) !!}
                        </div>
                        <div class="col-md-6">
                        {!! Form::number('heure', null, ['class' => 'form-control']) !!}

                        {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
                        </div>
                        </div>

                        <!-- label besoin -->
                        <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!} row">
                        <div class='col-md-4 col-form-label text-md-right'>
                        {!! Form::label('besoinL', 'besoin : ') !!}
                        </div>
                        <div class="col-md-6">
                        {!! Form::label('ponctuelL', 'ponctuel : ') !!}
                        {!! Form::radio('besoin', 'value', ['class' => 'form-control']) !!}
                        {!! Form::label('permanentL', 'permanent : ') !!}
                        {!! Form::radio('besoin', 'value', ['class' => 'form-control']) !!}
                        {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
                        </div>
                        </div>

                        <!-- label localisation -->
                        <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!} row">
                        <div class='col-md-4 col-form-label text-md-right'>
                        {!! Form::label('localisationL', 'Entrez le lieux de travail : ') !!}
                        </div>
                        <div class="col-md-6">
                        {!! Form::text('localisation', null, ['class' => 'form-control']) !!}

                        {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
                        </div>
                        </div>

                        <!-- label deplacement -->
                        <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!} row">
                        <div class='col-md-4 col-form-label text-md-right'>
                        {!! Form::label('deplacementL', "distance déplacement :" ) !!}
                        </div>
                        <div class="col-md-6">
                        {!! Form::number('deplacement', null, ['class' => 'form-control']) !!}

                        {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
                        </div>
                        </div>


                        

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
