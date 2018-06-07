@extends('layouts.adminLayout')

@section('title', 'Liste des utilisateurs')

@section('content')

<br />
<h1 id="titleUtilisateur" >Les utilisateurs</h1>

<div class="container">
    @foreach($utilisateurs as $utilisateur)
    <ul>
      <li>{{ $utilisateur -> id}}</li>
      <li>Nom du responsable de structure: {{ $utilisateur -> nom}}</li>
      <li>Structure: {{ $utilisateur ->structure}}</li>
</ul>
@endforeach
</div>

@endsection