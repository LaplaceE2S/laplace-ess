<header>
     <nav class="navbar navbar-light bg-light justify-content-between">
        <a class="navbar-brand" href="{{ route('welcome') }}">
            <img src="./images/LaPlace-Transparent.png" width="200" height="100" class="d-inline-block align-top" alt="logo La Place ess">
        </a>

        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Compétence ou sous-compétence" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
        </form>
    
        <ul class="">
            <li class="nav-item dropdown right-item-nav">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Bonjour {{ Auth::user()->name }} <img class="avatarProfil" src="./images/avatar_utilisateur.png" alt""></a>

        <div class="dropdown-menu essbg2">
            <a class="dropdown-item essbg3" href="{{ route('home') }}">{{ __('Tableau de bord') }}</a>
            <a class="dropdown-item essbg3" href="{{ route('home') }}">{{ __('Les annonces') }}</a>
            <a class="dropdown-item essbg3" href="{{ route('home') }}">{{ __('Les structures') }}</a>
            <a class="dropdown-item essbg3" href="{{ route('home') }}">{{ __('Mes messages') }}</a>
            <a class="dropdown-item essbg3" href="{{ route('profil') }}">{{ __('Profil') }}</a>
            <a class="dropdown-item essbg3" href="{{ route('logout') }}"              onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Se déconnecter') }}</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> @csrf </form>
        </div>
            </li>
        </ul>
    </nav>
</header>