@extends('layouts.userLayout')
@section('title')
Voir une offre
@endsection
@section('content')
<?php 
use App\User;
$type = Auth::user()->type;
?>
<div class='col-12'>
<div class='col col-md-8  readannonce'>
</h2>{{$offre->structNom}}</h2>
<h3>{{$offre->titre}}</h3>
<p>{{$offre->compNom}}</p>
<p>{{$offre->subName}}</p>
<p>{{$offre->description}}</p>
<p>parut le {{date('d-m-Y à H:i:s', $offre->updated_at)}}<p>
<p>débutant le {{date('d-m-Y', $offre->debut)}}<p>
<p>terminant le {{date('d-m-Y', $offre->fin)}}<p>
<p> les heures demandés sont de {{$offre->heure}} heure(s) par {{$offre->frequence}}<p>
<p> Les besoins pour cette mission  sont {{$offre->besoin}}<p>
@if ($type > 0)<p> Lieu: {{$offre->lieu}}<p>@endif 
<p>Ce contrat entre dans le cadre d'une {{$offre->service}} pour {{$offre->cout}}<p>
@if ($offre->deplacement)
<p> des déplacements peuvent être prévue jusqu'a {{$offre->deplacement}} kilomètres<p>
@else
<p> Aucun déplacement prévue<p>
@endif
</div>
</div>
@endsection
