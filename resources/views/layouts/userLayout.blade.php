<?php 
use App\User;
$type = Auth::user()->type;
//generation de la selection de competence
$comps = Skills::all();
$searchForm ="echo Form::select('id', array(";
foreach( $comps as $comp ){
  $searchForm = $searchForm."'".$comp->id."' => '".$comp->nom."',";
}
$searchForm = $searchForm."));";

?>

@include('layouts.head')

<body>

  @include('layouts.userheader')
  @include('layouts.userMenu')
  @yield('content')
  </div>
  </section>
  @include('layouts.footer')</div>
</body>
</html>
