<?php 

namespace App\Http\Controllers;

use App\Companies;
use App\User;
use Auth;
use Image;
use Validator;
use App\Http\Requests\UserCreateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller 
{

  public function __construct()
  {
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
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  
  public function show()
  {
    $id = Auth::user()->id;

    $utilisateur = DB::table('companies')
            ->where('companies.users_id', '=', $id )
            ->join('users', 'users.id', '=', 'companies.users_id')
            ->select('companies.*', 'users.email', 'users.avatar', 'users.finabo')
            ->get();

            $utilisateur = $utilisateur[0];

            if($utilisateur->budget == 0)
            {
              $utilisateur->budget = '';
            }

            if ($utilisateur->siret == 0) {
                $utilisateur->siret = '';
            }

            if($utilisateur->postal == 0)
            {
              $utilisateur->postal = '';
            }

            if($utilisateur->telephone == 0)
            {
              $utilisateur->telephone = '';
            }

            if($utilisateur->etp == 0)
            {
              $utilisateur->etp = '';
            }

            if($utilisateur->finabo == 0)
            {
              $utilisateur->finabo = '';
            }

            $menu ='profil';
            return view('users.readProfil', compact('utilisateur','menu')); 
            /* la fonction compact équivaut à array('posts' => $posts) */
}

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit()
    {   
      $id = Auth::user()->id;

      $utilisateur = DB::table('companies')
              ->where('companies.users_id', '=', $id )
              ->join('users', 'users.id', '=', 'companies.users_id')
              ->select('companies.*', 'users.email', 'users.avatar')
              ->get();

              $utilisateur = $utilisateur[0];

            if($utilisateur->budget == 0)
            {
              $utilisateur->budget = NULL;
            }

              if ($utilisateur->siret == 0) {
                $utilisateur->siret = NULL;
            }

            if($utilisateur->postal == 0)
            {
              $utilisateur->postal = NULL;
            }

            if($utilisateur->telephone == 0)
            {
              $utilisateur->telephone = '';
            }

            if($utilisateur->etp == 0)
            {
              $utilisateur->etp = NULL;
            }

            $menu ='profil';

            return view('users.editProfil', compact('utilisateur','menu')); 
    }

  /**
   * Update the specified resource in storage.
   * @param  \Illuminate\Http\Request  $request
   * @param  
   * @return Response
   */

  public function update(Request $request)
  {

    $id= Auth::id();
    $id= User::find($userId = Auth::id());

    $exp = bcpow('10', '14', 0)-1;

    $validator = Validator::make($request->all(), [
    'structure' => 'bail|required|min:3|max:20|string',
    'statut' => 'bail|required|min:3|max:20|string',
    'budget' => 'bail|required|numeric',
    'etp' => 'bail|required|min:0|max:150|numeric',
    'rue' => 'bail|required|min:3|max:50|string',
    'postal' => 'bail|required|max:100000|numeric',
    'ville' => 'bail|required|min:3|max:20|alpha',
    'name' => 'bail|required|min:3|max:20|string',
    'prenom' => 'bail|required|min:3|max:20|string',
    'telephone' => 'bail|required|min:11|max:0989999999|numeric',
    'email' => 'bail|required|email',
    'url' => 'bail|url',
    'avatar' => 'image'
  ]);

    if ($validator->fails()) {
      return back()->withErrors($validator)->withInput();
    } 
    else{

      //controle si email = emailunique ou email =! emailunique
    
        // référence table users
        $userId = Auth::id();
        $userId = User::find($userId = Auth::id());

        $userId->email = request('email');
        $userId->name = request('name');


        if ($request->hasFile('avatar')) {
            //Pour récupérer le fichier envoyé j'ai utilisé la requête et la méthode file
            $avatar = $request->file('avatar');
            //Pour récupérer l'extension originelle on utilise la méthodegetClientOriginalExtension
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            //on enregistre l'image avec la méthode save
            Image::make($avatar)->resize(150, 150)->save(public_path("images/") . $filename);

            $user = Auth::user();
            $user->avatar = 'http://laplace-ess.fr/public/images/' . $filename;
            $user->save();
        }

        // Référence table companies
        $companieId = CompaniesController::WhoAmI();
        $companie = Companies::find($companieId = CompaniesController::WhoAmI());

        $companie->structure = request('structure');
        $companie->statut = request('statut');
        $companie->budget = request('budget');
        $companie->siret = request('siret');
        $companie->rue = request('rue');
        $companie->postal = request('postal');
        $companie->ville = request('ville');
        $companie->nom = request('name');
        $companie->prenom = request('prenom');
        $companie->telephone = request('telephone');
        $companie->etp = request('etp');
        $companie->url = request('url');
  
  
        // update data
        $userId->save();
        $companie->save();

        return redirect('/home');
    }
  }

  /**
   * 
   *
   * View delete profil user
   * 
   */
  public function users()
  {
    
    $id = Auth::user()->id;

    $utilisateurs = DB::table('companies')
            ->where('companies.users_id', '=', $id )
            ->join('users', 'users.id', '=', 'companies.users_id')
            ->select('companies.*', 'users.email', 'users.avatar')
            ->get();
            $menu = 'profil';
            return view('users.deleteProfil', compact('utilisateurs','menu')); 
  }
    
  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
    {
      
      if($id != Auth::user()->id)
      {
        return redirect('/accueil');
      }
      
     DB::table('users')->where('id', $id)->delete();
        return redirect('/accueil');
    }

    // view charte engagement
    public function charte()
    {
      $menu = 'profil';
      return view('users.charteEngagement', compact('menu'));
    }

    // demande d'abonnement pour user
    public function askSubscription()
    {
      $id = Auth::user()->id;
      DB::table('users')->where('id', $id)->update(['demande' => 1]);
                      
      $menu = 'profil';
      
      $title = "Confirmation de votre demande d'abonnement";
      $msg = "Merci, nous avons bien reçu votre demande d'abonnement au service La Place, vous recevrez un message de confirmation, dans les plus brefs délais.";

      return view('users.confirmCreate', compact('title', 'msg', 'menu'));   
    }

    // view convention
    public function convention()
    {
      $menu = 'document';
      return view('users.modeleconvention', compact('menu'));
    }

    // view avenant
    public function avenant()
    {
      $menu = 'document';
      return view('users.modeleavenant', compact('menu'));
    }
    
}

?>