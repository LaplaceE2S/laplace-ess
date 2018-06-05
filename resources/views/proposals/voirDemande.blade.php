@extends('layouts.userLayout')
@section('title')
Voir une demande
@endsection
@section('content')
<div class='col-12'>
<div class='col col-md-8  readannonce'>
<h3>{{$demande->titre}}</h3>
<p>{{$demande->compNom}}</p>
<p>{{$demande->subName}}</p>
<p>{{$demande->description}}</p>
<p>parut le {{date('d-m-Y à H:i:s', $demande->updated_at)}}<p>
<p>débutant le {{date('d-m-Y', $demande->debut)}}<p>
<p>terminant le {{date('d-m-Y', $demande->fin)}}<p>
<p> les heures demandés sont de {{$demande->heure}} heure(s) par {{$demande->frequence}}<p>
<p> Les besoins pour cette mission  sont {{$demande->besoin}}<p>
<p> Lieu: {{$demande->lieu}}<p> 
@if ($demande->deplacement)
<p> des déplacements peuvent être prévue jusqu'a {{$demande->deplacement}} kilomètres<p>
@else
<p> Aucun déplacement prévue<p>
@endif
<p> descriptif matériel:{{$demande->materiel}}<p>
</div>
</div>
@endsection
