@extends('layouts.adminLayout')

@section('title', 'Profil de la structure')

@section('content')
@foreach($utilisateurs as $utilisateur)
    <div class="col-sm-12"><h1>Fiche structure:  {{ $utilisateur->structure }} </h1>

        <br>

        <div class="panel panel-primary">   
        
            <div class="panel-heading">Information générale
                <div class="panel-body"> 
                    <p> Statut : {{ $utilisateur->statut }}</p>
                    <p> Budget : {{ $utilisateur->budget }} €</p>
                    <p> Adresse : {{ $utilisateur->rue }}, {{ $utilisateur->postal }} {{ $utilisateur->ville }} </p>
                </div>
            </div>
            
            <div class="panel-heading">Information du responsable
                <div class="panel-body"> 
                    <p>Nom: {{ $utilisateur->nom }}</p>
                    <p>Prénom: {{ $utilisateur->prenom }}</p>
                    <p>Email : {{ $utilisateur->email }}</p>
                    <p>Téléphone : {{ $utilisateur->telephone }}</p>
                </div>
            </div>

@endforeach
        </div>              

        <a href="javascript:history.back()" class="btn btn-primary">

            <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour

        </a>

    </div>

@endsection