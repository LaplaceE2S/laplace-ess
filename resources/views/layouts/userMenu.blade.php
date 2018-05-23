
<section class='row admin'>
<!-- Nav tabs -->
<ul class="nav nav-tabs|pills" id="navId">
    
    <li class="nav-item">
        <a href="#tab1Id" class="nav-link active">Mes favoris</a>
    </li>
    @if ($type > 0)
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Mes annonces</a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#tab2Id">Création</a>
            <a class="dropdown-item" href="#tab3Id">Suivi</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#tab4Id">Archivages des annonces publiées</a>
        </div>
    </li>
    
    <li class="nav-item">
        <a href="#tab5Id" class="nav-link">Mes documents</a>
    </li>
    <li class="nav-item">
        <a href="#tab5Id" class="nav-link">Mes contributions</a>
    </li>
    @endif
   
    <li class="nav-item">
        <a href="#tab5Id" class="nav-link">Mes messages</a>
    </li>
    <li class="nav-item">
        <a href="#tab5Id" class="nav-link">Mon abonnement</a>
    </li>
</ul>


