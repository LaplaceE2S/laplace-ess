<header>
    <nav class="navbar navbar-expand-md navbar-dark essbg1">
        <a class="navbar-brand" href="{{ route('welcome') }}"><img src="./images/LaPlace-Transparent.png" width="200" height="100" class="d-inline-block align-top" alt=""></a>
        <a class="navbar-brand" href="#"><img src="./images/LaPlace-Transparent.png" width="200" height="100" class="d-inline-block align-top" alt=""></a>
        <a class="navbar-brand" href="#"><img src="./images/LaPlace-Transparent.png" width="200" height="100" class="d-inline-block align-top" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                  A propos
                </a>
                <div class="dropdown-menu essbg2">
                  <a class="dropdown-item essbg3" href="#">La place</a>
                  <a class="dropdown-item essbg3" href="#">Le pôle ess</a>
                  <a class="dropdown-item essbg3" href="#">Nos partenaires</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                  Compétences
                </a>
                <div class="dropdown-menu essbg2">
                  <a class="dropdown-item essbg3" href="#">Communication externe</a>
                  <a class="dropdown-item essbg3" href="#">Dévelopement économique</a>
                  <a class="dropdown-item essbg3" href="#">Gestion administrative et financière</a>
                  <a class="dropdown-item essbg3" href="#">Ressources humaines</a>
                  <a class="dropdown-item essbg3" href="#">Informatique</a>
                </div>
              </li>
            @guest
            <li class="nav-item right-item-nav">
              <a class="nav-link" href="{{ route('register') }}">{{ __("S'inscrire") }}</a>
            </li>
            <li class="nav-item right-item-nav-end">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Se connecter') }}</a>
            </li>
            @else
            <li class="nav-item dropdown right-item-nav">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Bonjour {{ Auth::user()->name }}</a>

            <div class="dropdown-menu essbg2">
              <a class="dropdown-item essbg3" href="{{ route('logout') }}"              onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('se déconnecter') }}</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> @csrf
              </form>
            </div>
            </li>
            @endguest
            <li class="nav-item right-item-nav-end">
                <a class="nav-link" href="{{ route('contact') }}">{{ __('Nous contacter') }}</a>
            </li>
              <a class="nav-link" href="{{ route('register') }}">{{ __('s inscrire') }}</a>
            </li>
            <li class="nav-item right-item-nav-end">
            <a class="nav-link" href="{{ route('login') }}">{{ __('se connecter') }}</a>
            </li>
            @else
            <li class="nav-item dropdown right-item-nav">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                    {{ Auth::user()->name }} </span>
                                </a>

                                <div class="dropdown-menu essbg2">
                                    <a class="dropdown-item essbg3" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
            @endguest
            <li class="nav-item right-item-nav-end">
                <a class="nav-link" href="#">Nous contacter</a>
            </li>
              <a class="nav-link" href="{{ route('register') }}">{{ __('s inscrire') }}</a>
            </li>
            <li class="nav-item right-item-nav-end">
            <a class="nav-link" href="{{ route('login') }}">{{ __('se connecter') }}</a>
            </li>
            @else
            <li class="nav-item dropdown right-item-nav">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                    {{ Auth::user()->name }} </span>
                                </a>

                                <div class="dropdown-menu essbg2">
                                    <a class="dropdown-item essbg3" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
            @endguest
            <li class="nav-item right-item-nav-end">
                <a class="nav-link" href="#">Nous contacter</a>
            </li>
          </ul>
        </div>  
    </nav>
</header>