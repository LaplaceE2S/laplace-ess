@extends('layouts.userLayout')

@section('title')
Les informations de votre profil
@endsection

@section('content')

<div class="container-fluid">
    <div class="row" >
        <div class="col-12">
            <div id="infoProfil" class="card card-inverse">
                <div class="card-block">

    <div class="row">
        <div class="col-md-4 col-sm-4">
            <h2 id="structureTitle" class="card-title text-left">Structure</h2>
                <h5 class="card-text text-left"><strong>Statut </strong> </h5>
                <h5 class="card-text text-left"><strong>Budget </strong> 1500<span> € </span> </h5>
                <h5 class="card-text text-left"><strong>N° SIRET </strong> 12345678123454</h5>
        </div>

        <div class="col-md-4 col-sm-4">
            <h2 id="structureTitle" class="card-title text-left">E2s</h2>
                <h5 class="card-text text-left"><strong>Adresse </strong> 2 rue du Port</h5>
                <h5 class="card-text text-left"><strong>Code postal </strong> 56000</h5>
                <h5 class="card-text text-left"><strong>Ville </strong> Vannes</h5>
        </div>

        <div class="col-md-4 col-sm-4 text-center">
            <img class="btn-md" src="./images/avatar_utilisateur.png" alt="" style="border-radius:50%;">
        </div>     

        <div class="col-md-12 col-sm-12">
            <br />
            <br />
        </div>

        <div class="col-md-4 col-sm-4 text-center">    
            <h5 class="card-text text-left"><strong>Nom </strong> Kersuzan</h5>     
            <h5 class="card-text text-left"><strong>Prénom </strong> Fanny</h5>         

        </div>

        <div class="col-md-4 col-sm-4 text-center">   
            <h5 class="card-text text-left"><strong>Tel </strong> 0299457836</h5>     
            <h5 class="card-text text-left"><strong>Mail </strong> webDev.fk@gmail.com</h5>            
        </div>

        <div class="col-md-4 col-sm-4 text-center">  
            <h5 class="card-text">www.laplace-ess.fr</h5>               
                <button type="button" class="btn btn-danger btn-block btn-md"><span class="fa fa-google-plus-square"></span> Modifier son profil </button>  
        </div>

</div>
</div>
</div>
</div>
</div> 
</div>
@endsection
