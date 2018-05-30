<header>
     <nav class="navbar navbar-light bg-light justify-content-between">
        <a class="navbar-brand" href="{{ route('welcome') }}">
            <img src="/laplace-ess/public/images/LaPlace-Transparent.png" width="200" height="100" class="d-inline-block align-top" alt="logo La Place ess">
        </a>
        <form method="GET" action="{{ route('proposalBySkill') }}">
         <?php
         echo Form::select('comp', $comps);
         ?>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
            {{ Form::close() }}
        <ul class="">
            <li class="nav-item dropdown right-item-nav">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">{{ Auth::user()->name }} <img class="avatarProfil" src="{{ Auth::user()->avatar }}" alt""></a>

        <div class="dropdown-menu essbg2">
            <a class="dropdown-item essbg3" href="{{ route('home') }}">{{ __('Tableau de bord') }}</a>
            @if ($type > 0)
            <a class="dropdown-item essbg3" href="{{ route('home') }}">{{ __('Annonces publiées') }}</a>
            @endif
            <a class="dropdown-item essbg3" href="{{ route('home') }}">{{ __('Favoris') }}</a>
            <a class="dropdown-item essbg3" href="{{ route('home') }}">{{ __('Message') }}</a>
            <a class="dropdown-item essbg3" href="{{ route('profil') }}">{{ __('Profil') }}</a>
            <a class="dropdown-item essbg3" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Se déconnecter') }}</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> @csrf </form>
        </div>
            </li>
        </ul>
    </nav>
</header>