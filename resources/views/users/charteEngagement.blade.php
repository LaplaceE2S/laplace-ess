@extends('layouts.userLayout')

@section('title', "Charte d'engagement")

@section('content')

<div class="col-12">
<object data="./uploads/pdf/badge.pdf" type="application/pdf" width="100%" height="auto">
  <param name="filename" value="./uploads/pdf/badge.pdf" /> 
  <a href="./uploads/pdf/badge.pdf" title="le fichier">Téléchargez le fichier</a>
</object>
</div>

@endsection