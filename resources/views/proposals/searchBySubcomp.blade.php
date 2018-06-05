@extends('layouts.userLayout')
@section('title')
Créer son profil
@endsection
@section('content')
<div class ="col-12">
<div class ="col-4 subSearch">
  <form method="GET" action="{{ route('proposalBySubSkill') }}">
         <?php
         
         echo Form::select('subSkillSearch',$subSkillSearch);
         ?>
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
  {{ Form::close() }}
</div>
</div>
<div class ="row">
<div class="col-12 col-sm-6">
<h2>Offres</h2>
@if($offres != NULL)
@foreach ($offres as $offre)


<div class='row cadreBillet'>

  <h3 class='col-12'>{{ $offre->titre }}</h3>
  <div class='col-6'>
  
  <p>{{ $offre->compNom }}</p>
  <p>{{ $offre->subName }}</p>
  <p>{{ mb_strimwidth($offre->description, 0, 200, "...")}}</p>
  
  </div>
  <div class='col-6'>
  <p>{{ $offre->structNom }}</p>
  <p>parut le {{date('d-m-Y à H:i:s', $offre->updated_at)}}</p>
  <p>{{ $offre->duree->format('%a jour(s)') }}</p>
  <p>{{ $offre->lieu }}</p>
  </div>
  <a class='btn btn-outline-success my-2 my-sm-0 href ' href ='../proposal/voir_offre/{{$offre->proposalId}}'> Voir les détails de l'offre</a>
</div>

@endforeach
@endif
<a class='btn btn-outline-warning my-2 my-sm-0 href col-12' href ='../proposal/new_offre/skill/{{$subcomp}}'> je propose une offre</a>
</div>
<div class="col-12 col-sm-6">
<h2>Demandes</h2>
@if($demandes != NULL)
@foreach ($demandes as $demande)


<div class='row cadreBillet'>

  <h3 class='col-12'>{{ $demande->titre }}</h3>
  <div class='col-6'>
  
  <p>{{ $demande->compNom }}</p>
  <p>{{ $demande->subName }}</p>
  <p>{{ $demande->description }}</p>
  
  </div>
  <div class='col-6'>
  <p>{{ $demande->structNom }}</p>
  <p>{{ $demande->debut }}</p>
  <p>{{ $demande->duree->format('%a jour(s)') }}</p>
  <p>{{ $demande->lieu }}</p>
  </div>
  <a class='btn btn-outline-success my-2 my-sm-0 href ' href ='../proposal/voir_demande/{{$demande->proposalId}}'> Voir les détails de la demande</a>
</div>

@endforeach
@endif
<a class='btn btn-outline-warning my-2 my-sm-0 href col-12' href ='../proposal/new_demande/skill/{{$subcomp}}'> je crée une demande</a>
</div>
</div>
@endsection
