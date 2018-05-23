<?php 
use App\User;
use App\Sub_skills;
$type = Auth::user()->type;
$searchFormBuilder = DB::table('sub_skills')
            ->join ('skills', 'sub_skills.skills_id', '=', 'skills.id')
            ->select('skills.nom as competence','sub_skills.id','sub_skills.nom')
            ->get();
$searchForm="Form::select('animal', array(";
$comp ='';
foreach ($searchFormBuilder as $value){

  if($comp != '' and $comp != $value->competence){
    $searchForm = $searchForm."),";
  }

  if($comp != $value->competence){
    $comp = $value->competence;
    $searchForm = $searchForm."'".$comp."' => array(";
  }
  $searchForm = $searchForm."'".$value->id."' => '".$value->nom."'";

}
$searchForm = $searchForm."))";
var_dump($searchForm);

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
