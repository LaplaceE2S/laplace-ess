<?php 
use App\User;
use App\Skills;
$type = Auth::user()->type;
$skills = Skills::all();
$comps= array();
foreach($skills as $skill){
$comps[$skill->id] = $skill->nom;
}
?>

@include('layouts.head')

<body>

  @include('layouts.userheader')
  @include('layouts.'.$menu)
  @yield('content')
  </div>
  </section>
  @include('layouts.footer')</div>
</body>
</html>
