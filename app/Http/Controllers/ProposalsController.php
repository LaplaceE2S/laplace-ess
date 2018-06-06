<?php 

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Proposals;
use App\Sub_skills;
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


    $subSkills = DB::table('sub_skills')
    
    ->select('sub_skills.*')
    ->where('sub_skills.skills_id', '=', $comp)
    ->get();
    

    
    $proposals = DB::table('proposals')
    
    ->join('sub_skills', 'sub_skills.id', '=', 'proposals.sub_skills_id')
    ->join('skills', 'skills.id', '=', 'sub_skills.skills_id')
    ->join('companies', 'companies.id', '=', 'proposals.companies_id')
    ->select('proposals.*','proposals.id as proposalId','companies.nom as structNom','skills.nom as compNom','sub_skills.nom as subName')
    ->where('sub_skills.skills_id', '=', $comp)
    ->where('proposals.is_valid', '=', 1)
    ->get();

    $comps= array();
    foreach($subSkills as $subSkill){
    $subSkillSearch[$subSkill->id] = $subSkill->nom;
    }

    
    $offres= array();
    $demandes= array();
    foreach($proposals as $proposal){
      $datetime1 = date_create($proposal->debut);
      $datetime2 = date_create($proposal->fin);
      $proposal->updated_at = strtotime($proposal->updated_at);
      $proposal->duree = date_diff($datetime1, $datetime2);
      if($proposal->type == 'demande'){
        array_push($demandes, $proposal);
      }else{
        array_push($offres, $proposal);
      }
    }
    return view('proposals.searchByComp', compact('comp','demandes','offres','subSkillSearch'));
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
   * redirect after a search request.
   *
   * @return Response
   */
  public function showBySubSkill($subcomp)
  {
    $subSkills = Sub_skills::find($subcomp);
    $comp = $subSkills->skills_id;
    $subSkills = DB::table('sub_skills')
    
    ->select('sub_skills.id','sub_skills.nom')
    ->where('sub_skills.skills_id', '=', $comp)
    ->get();
    
    $proposals = DB::table('proposals')
    
    ->join('sub_skills', 'sub_skills.id', '=', 'proposals.sub_skills_id')
    ->join('skills', 'skills.id', '=', 'sub_skills.skills_id')
    ->join('companies', 'companies.id', '=', 'proposals.companies_id')
    ->select('proposals.*','proposals.id as proposalId','companies.nom as structNom','skills.nom as compNom','sub_skills.nom as subName')
    ->where('sub_skills.id', '=', $subcomp)
    ->where('proposals.is_valid', '=', 1)
    ->get();

    $subSkillSearch= array();
    foreach($subSkills as $subSkill){
      $subSkillSearch[$subSkill->id] = $subSkill->nom;

    }

    
    $offres= array();
    $demandes= array();
    foreach($proposals as $proposal){
      $datetime1 = date_create($proposal->debut);
      $datetime2 = date_create($proposal->fin);
      $proposal->updated_at = strtotime($proposal->updated_at);
      $proposal->duree = date_diff($datetime1, $datetime2);
      if($proposal->type == 'demande'){
        array_push($demandes, $proposal);
      }else{
        array_push($offres, $proposal);
      }
    }
    return view('proposals.searchBySubComp', compact('comp','demandes','offres','subSkillSearch'));
  }

    /**
   * redirect after a search request.
   *
   * @return Response
   */
  public function searchSubRewrite(Request $request)
  {
    $id = $request->get('subSkillSearch');
    return redirect('./proposalBySubSkill/'.$id);
    
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
   * affiche les  offres.
   *
   * @param  int  $id
   * @return Response
   */
  public function voir_offre($id)
  {
    $offre = DB::table('proposals')
    
    ->join('sub_skills', 'sub_skills.id', '=', 'proposals.sub_skills_id')
    ->join('skills', 'skills.id', '=', 'sub_skills.skills_id')
    ->join('companies', 'companies.id', '=', 'proposals.companies_id')
    ->select('proposals.*','proposals.id as proposalId','companies.nom as structNom','skills.nom as compNom','sub_skills.nom as subName')
    ->where('proposals.id', '=', $id)
    ->get();
    if($offre != NULL){
    $offre=$offre[0];
  }
    
    if($offre != NULL and $offre->is_valid > 0 and $offre->type == 'offre'){
      $offre->updated_at = strtotime($offre->updated_at);
      $offre->debut = strtotime($offre->debut);
      $offre->fin = strtotime($offre->fin);
      if($offre->frequence == 0){
        $offre->frequence = 'semaine(s)';
      }else{
        $offre->frequence = 'mois';
      }

      if($offre->besoin == 0){
        $offre->besoin = 'ponctuel';
      }else{
        $offre->besoin = 'permanent ';
      }

      if($offre->service == 0){
        $offre->service = 'prestation';
        $offre->cout = $offre->cout . 'euros';
      }else{
        $offre->service = 'mis a disposition';
        $offre->cout = $offre->cout . "euros de l'heure";
      }

      return view('proposals.voirOffre', compact('offre'));
   
  }else{
    $erreur = "Une erreur a été détectée dans le numéro de l'offre, elle n'est pas encore en cours de publication ou n'existe pas";
    return view('companies.erreur', compact('erreur'));
  }

  }

    /**
   * affiche les demandes.
   *
   * @param  int  $id
   * @return Response
   */
  public function voir_demande($id)
  {
    $demande = DB::table('proposals')
    
    ->join('sub_skills', 'sub_skills.id', '=', 'proposals.sub_skills_id')
    ->join('skills', 'skills.id', '=', 'sub_skills.skills_id')
    ->join('companies', 'companies.id', '=', 'proposals.companies_id')
    ->select('proposals.*','proposals.id as proposalId','companies.nom as structNom','skills.nom as compNom','sub_skills.nom as subName')
    ->where('proposals.id', '=', $id)
    ->get();
    if($demande != NULL){
    $demande=$demande[0];
  }
    
    if($demande != NULL and $demande->is_valid > 0 and $demande->type == 'demande'){
      $demande->updated_at = strtotime($demande->updated_at);
      $demande->debut = strtotime($demande->debut);
      $demande->fin = strtotime($demande->fin);
      if($demande->frequence == 0){
        $demande->frequence = 'semaine(s)';
      }else{
        $demande->frequence = 'mois';
      }

      if($demande->besoin == 0){
        $demande->besoin = 'ponctuel';
      }else{
        $demande->besoin = 'permanent ';
      }

      if($demande->service == 0){
        $demande->service = 'prestation';
        $demande->cout = $demande->cout . 'euros';
      }else{
        $demande->service = 'mis a disposition';
        $demande->cout = $demande->cout . "euros de l'heure";
      }

      return view('proposals.voirDemande', compact('demande'));
   
  }else{
    $erreur = "Une erreur a été détectée dans le numéro de la demande, elle n'est pas encore en cours de publication ou n'existe pas";
    return view('companies.erreur', compact('erreur'));
    
  }
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