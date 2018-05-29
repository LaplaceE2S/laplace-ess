<?php 

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Proposals;

class ProposalsController extends Controller 
{


  public function __construct(){
  $this->middleware('auth');
  }

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */


  public function index()
  {
    
    
  }


  /**
   * redirect after a search request.
   *
   * @return Response
   */
  public function showBySkill($comp)
  {
    
    $proposal = DB::table('proposals')
    
    ->join('sub_skills', 'sub_skills.id', '=', 'proposals.sub_skills_id')
    ->select('proposals.*')
    ->where('sub_skills.skills_id', '=', $comp)
    ->get();
    return view('proposals.searchByComp');
  }

  /**
   * redirect after a search request.
   *
   * @return Response
   */
  public function searchRewrite(Request $request)
  {
    $id = $request->get('comp');
    return redirect('./proposalBySkill/'.$id);
    
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('proposals.create');
  }

    /**
   * Show the form for creating a offre.
   *
   * @return Response
   */
  public function formOffre()
  {
    return view('proposals.createOffre');
  }

      /**
   * Show the form for creating a offre.
   *
   * @return Response
   */
  public function formDemande()
  {

    return view('proposals.createDemande');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    if(request('type')=='demande'){
    $proposal = Proposals::create([
      'titre' => request('titre'),
      'type' => request('type'),
      'description' => request('description'),       
      'debut' => request('debut'),
      'fin' => request('fin'),
      'expiration' => request('archivage'),
      'frequence' => request('frequence'),
      'heure' => request('heure'),
      'besoin' => request('besoin'),
      'lieu' => request('localisation'),
      'deplacement' => request('deplacement'), 
      'materiel' => request('materiel'), 
      'is_valid' => 0,
      'sub_skills_id' => 6,
      'companies_id' => 1,
      'cout' => 0,
      'service' => 0,
      ]);

      $title = "Confirmation de création de la demande";
      $msg = "Merci , nous avons bien reçu votre demande de création d'annonce, elle est en attente de validation.";
    }
    else if(request('type')=='offre'){
      $proposal = Proposals::create([
        'titre' => request('titre'),
        'type' => request('type'),
        'description' => request('description'),       
        'debut' => request('debut'),
        'fin' => request('fin'),
        'expiration' => request('archivage'),
        'frequence' => request('frequence'),
        'heure' => request('heure'),
        'besoin' => request('besoin'),
        'lieu' => request('localisation'),
        'deplacement' => request('deplacement'), 
        'materiel' => '', 
        'is_valid' => 0,
        'sub_skills_id' => 6,
        'companies_id' => 1,
        'cout' => request('cout'),
        'service' => request('service'),
        ]);

        $title = "Confirmation de création de l'offre";
        $msg = "Merci , nous avons bien reçu votre demande de création d'annonce, elle est en attente de validation.";

    }else{

      $title = "erreur";
      $msg = "Attention une erreur est survenue";

    }
  

  
      return view('users.confirmCreate', compact('title', 'msg')); 
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
}

?>