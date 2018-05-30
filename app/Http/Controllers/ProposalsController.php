<?php 

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Proposals;
use App\Http\Requests\ProposalRequest;
use Validator;

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
    return view('proposals.searchByComp', compact('comp'));
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
  public function formOffre($comp)
  {
    $companieId= CompaniesController::WhoAmI();
    $skillData =  Sub_skillsController::getListWithSkill($comp);
    $liste = $skillData[0];
    $compName = $skillData[1];
    return view('proposals.createOffre', compact('compName','liste','companieId'));
  }

      /**
   * Show the form for creating a offre.
   *
   * @return Response
   */
  public function formDemande($comp)
  {
    
    $companieId= CompaniesController::WhoAmI();
    $skillData =  Sub_skillsController::getListWithSkill($comp);
    $liste = $skillData[0];
    $compName = $skillData[1];
    return view('proposals.createDemande', compact('compName','liste','companieId'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(ProposalRequest $request)
  { 

    
    $deplacement = request('deplacement');
    if($deplacement == NULL){
      $deplacement = 0;
    }
    

    if(request('type')=='demande'){

      $validator = Validator::make($request->all(), [
        'materiel' => 'required|alpha'
    ]);

    if ($validator->fails()) {
        return redirect(url()->previous())
                    ->withErrors($validator)
                    ->withInput();
    }

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
      'deplacement' => $deplacement,
      'materiel' => request('materiel'), 
      'is_valid' => 0,
      'sub_skills_id' => request('comp'),
      'companies_id' => request('companieId'),
      'cout' => 0,
      'service' => 0,
      ]);

      $title = "Confirmation de création de la demande";
      $msg = "Merci , nous avons bien reçu votre demande de création d'annonce, elle est en attente de validation.";
    }
    else if(request('type')=='offre'){

      $validator = Validator::make($request->all(), [
        'service' => 'required|numeric|max:1',
        'cout' => 'required|numeric|min:0'
    ]);

    if ($validator->fails()) {
        return redirect(url()->previous())
                    ->withErrors($validator)
                    ->withInput();
    }

     

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
        'deplacement' => $deplacement, 
        'materiel' => '', 
        'is_valid' => 0,
        'sub_skills_id' => request('comp'),
        'companies_id' => request('companieId'),
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