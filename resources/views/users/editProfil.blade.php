
@extends('layouts.userLayout')

@section('title')
Modifiez votre profil
@endsection

@section('content')

<!-- @foreach($utilisateurs as $utilisateur) -->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h1 class="text-center">Modifier votre profil</h1></div>
                <div class="card-body">
                {!! Form::open(['route' => 'editProfil', $utilisateurs]) !!} 
                @csrf
                
                    <div class="row justify-content-left"><h5>Renseignements sur la structure<h5></div>

                        <!-- label STRUCTURE -->
                        <div class="form-group {!! $errors->has('structure') ? 'has-error' : '' !!} row">
                            <div class='col-md-4 col-form-label text-md-right'>
                            {!! Form::label('structure', 'Structure') !!}
                            </div>
                        <div class="col-md-6">
                            {!! Form::text('structure', "$utilisateur->structure", ['class' => 'form-control', 'placeholder' => 'Le nom de votre structure']) !!}
                            {!! $errors->first('structure', '<small class="help-block">:message</small>') !!}
                        </div>
                        </div>

                          <!-- label STATUT -->
                        <div class="form-group {!! $errors->has('statut') ? 'has-error' : '' !!} row">
                            <div class='col-md-4 col-form-label text-md-right'>
                            {!! Form::label('statut', 'Statut') !!}
                            </div>
                        <div class="col-md-6">
                            {!! Form::text('statut', "$utilisateur->statut", ['class' => 'form-control', 'placeholder' => 'Le statut de votre structure']) !!}
                            {!! $errors->first('statut', '<small class="help-block">:message</small>') !!}
                        </div>
                        </div>

                        <!-- label BUDGET -->
                         <div class="form-group {!! $errors->has('budget') ? 'has-error' : '' !!} row">
                            <div class='col-md-4 col-form-label text-md-right'>
                            {!! Form::label('budget', 'Budget') !!}
                            </div>
                        <div class="col-md-6">
                            {!! Form::text('budget', "$utilisateur->budget", ['class' => 'form-control', 'placeholder' => 'Le budget de votre structure']) !!}
                            {!! $errors->first('budget', '<small class="help-block">:message</small>') !!}
                        </div>
                        </div>

                        <!-- label SIRET -->
                         <div class="form-group {!! $errors->has('siret') ? 'has-error' : '' !!} row">
                            <div class='col-md-4 col-form-label text-md-right'>
                            {!! Form::label('siret', 'N° SIRET') !!}
                            </div>
                        <div class="col-md-6">
                            {!! Form::text('siret', "$utilisateur->siret", ['class' => 'form-control', 'placeholder' => 'Le numéro de siret de votre structure']) !!}
                            {!! $errors->first('siret', '<small class="help-block">:message</small>') !!}
                        </div>
                        </div>

                        <!-- label ADRESSE-->
                        <div class="form-group {!! $errors->has('rue') ? 'has-error' : '' !!} row">
                            <div class='col-md-4 col-form-label text-md-right'>
                            {!! Form::label('rue', 'Adresse') !!}
                            </div>
                        <div class="col-md-6">
                            {!! Form::text('rue', "$utilisateur->rue", ['class' => 'form-control', 'placeholder' => "L'adresse de votre structure"]) !!}
                            {!! $errors->first('rue', '<small class="help-block">:message</small>') !!}
                        </div>
                        </div>

                        <!-- label CODE POSTAL-->
                        <div class="form-group {!! $errors->has('postal') ? 'has-error' : '' !!} row">
                            <div class='col-md-4 col-form-label text-md-right'>
                            {!! Form::label('postal', 'Code Postal') !!}
                            </div>
                        <div class="col-md-6">
                            {!! Form::text('postal', "$utilisateur->postal", ['class' => 'form-control', 'placeholder' => "Le code postal de votre structure"]) !!}
                            {!! $errors->first('postal', '<small class="help-block">:message</small>') !!}
                        </div>
                        </div>

                        <!-- label VILLE-->
                        <div class="form-group {!! $errors->has('ville') ? 'has-error' : '' !!} row">
                            <div class='col-md-4 col-form-label text-md-right'>
                            {!! Form::label('ville', 'Ville') !!}
                            </div>
                        <div class="col-md-6">
                            {!! Form::text('ville', "$utilisateur->ville", ['class' => 'form-control', 'placeholder' => "La ville de votre structure"]) !!}
                            {!! $errors->first('ville', '<small class="help-block">:message</small>') !!}
                        </div>
                        </div>
                        
                        <div class="row justify-content-left"><h5>Renseignements sur le responsable de la structure</h5></div>

                        <!-- label NOM-->
                        <div class="form-group {!! $errors->has('nom') ? 'has-error' : '' !!} row">
                            <div class='col-md-4 col-form-label text-md-right'>
                            {!! Form::label('nom', 'Nom') !!}
                            </div>
                        <div class="col-md-6">
                            {!! Form::text('nom', "$utilisateur->nom", ['class' => 'form-control',  'placeholder' => "Le nom du responsable de la structure"]) !!}          
                            {!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
                        </div>
                        </div>

                        <!-- label PRENOM-->
                        <div class="form-group {!! $errors->has('prenom') ? 'has-error' : '' !!} row">
                            <div class='col-md-4 col-form-label text-md-right'>
                            {!! Form::label('prenom', 'Prénom') !!}
                            </div>
                        <div class="col-md-6">
                            {!! Form::text('prenom', "$utilisateur->prenom", ['class' => 'form-control', 'placeholder' => "Le prénom du responsable de la structure"]) !!}
                            {!! $errors->first('prenom', '<small class="help-block">:message</small>') !!}
                        </div>
                        </div>

                        <!-- label TELEPHONE-->
                        <div class="form-group {!! $errors->has('tel') ? 'has-error' : '' !!} row">
                            <div class='col-md-4 col-form-label text-md-right'>
                            {!! Form::label('tel', 'Téléphone') !!}
                            </div>
                        <div class="col-md-6">
                            {!! Form::tel('telephone', "$utilisateur->telephone", ['class' => 'form-control', 'placeholder' => "Le numéro de téléphone de la structure"]) !!}
                            {!! $errors->first('tel', '<small class="help-block">:message</small>') !!}
                        </div>
                        </div>

                        <!-- label EMAIL-->
                        <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!} row">
                            <div class='col-md-4 col-form-label text-md-right'>
                            {!! Form::label('email', 'Email') !!}
                            </div>
                        <div class="col-md-6">
                            {!! Form::email('email', "$utilisateur->email", ['class' => 'form-control', 'placeholder' => "L'adresse mail du responsable"]) !!}
                            {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                        </div>
                        </div>

                        <!-- label URL-->
                        <div class="form-group {!! $errors->has('url') ? 'has-error' : '' !!} row">
                            <div class='col-md-4 col-form-label text-md-right'>
                            {!! Form::label('url', 'Site internet') !!}
                            </div>
                        <div class="col-md-6">
                            {!! Form::url('url', "$utilisateur->url", ['class' => 'form-control', 'placeholder' => "L'adresse du site internet de votre structure"]) !!}
                            {!! $errors->first('url', '<small class="help-block">:message</small>') !!}
                        </div>
                        </div>

                        <!-- Label PHOTO-->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Photo</label>
                            <img class="btn-md" src="{{ Auth::user()->avatar }}" alt="photo de profil par défaut">
                            <input type="file" name="avatar">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </div>
             
                        <!-- bouton CREER SON PROFIL -->
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                {!! Form::submit('Envoyer', ['class' => 'btn btn-success pull-center']) !!}
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
<!-- @endforeach -->
{!! Form::close() !!}
@endsection



