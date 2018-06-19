@extends('layouts.userLayout')

@section('title', "Mon abonnement")

@section('content')

<br>

  <div class="row justify-content-center">
      <img src="/laplace-ess/public/uploads/pdf/badge.jpg" alt="charte d'engagment" width="75%"/>
  </div>

<br>

  <div class="row justify-content-center">

    <div class="col-3">
      <a class="btn btn-primary btn-block" href="/laplace-ess/public/uploads/pdf/badge.pdf" role="button" target="_blank">Télécharger la charte</a>
    </div>

    <div class="col-3">
      <a href="{{ route('souscription') }}" class="btn btn-warning btn-block" role="button">Je m'abonne au service</a>  
    </div>

  </div>

</br>
@endsection