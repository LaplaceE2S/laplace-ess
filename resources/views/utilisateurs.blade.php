@extends('layouts.layout')

@section('title')
Liste des utilisateurs inscrits
@endsection

@section('content')

<br />
<h1 id="titleUtilisateur" >Les utilisateurs inscrits</h1>

<div class="container">
    @foreach($utilisateurs as $utilisateur)
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Utilisateurs</th>
      <th scope="col">Nom</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{ $utilisateur -> id}}</th>
      <td>{{ $utilisateur -> name}}</td>
      <td>{{ $utilisateur -> email}}</td>
    </tr>
  </tbody>
</table>
@endforeach
</div>

@endsection