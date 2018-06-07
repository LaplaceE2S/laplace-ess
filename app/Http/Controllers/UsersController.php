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
    $utilisateurs = Companies::all();

    return view('utilisateurs', [
        'utilisateurs' => $utilisateurs,
    ]);
  }


  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */

  public function create()
  {
    return view('users.create');
  }


  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */

  public function store(Request $request)
  {
    $structure = Companies::create([
    'siret' => request('siret'),
    'nom' => request('nom'),
    'prenom' => request('prenom'),       
    'structure' => request('structure'),
    'url' => request('url'),
    'ville' => request('ville'),
    'postal' => request('postal'),
    'rue' => request('rue'),
    'telephone' => request('telephone'),
    'statut' => request('statut'),
    'budget' => request('budget'), 
    'users_id' => $request->user()->id, 
    ]);

    $title = "Confirmation de création de profil";
    $msg = "Merci " . request('prenom') . ", nous avons bien reçu votre demande de création de profil, vous recevrez un message de confirmation, dans les plus brefs délais.";

    return view('users.confirmCreate', compact('title', 'msg'));     
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
            ->select('companies.*', 'users.email', 'users.avatar')
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
 
            return view('users.readProfil', compact('utilisateur')); 
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

   
              return view('users.editProfil', compact('utilisateur')); 
    }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */

  public function update(Request $request)
  {
    //référence table users
    $userId = Auth::id();
    $userId = User::find($userId = Auth::id());

    $userId->email= request('email');
    $userId->name = request('name');

      if($request->hasFile('avatar')){
        $avatar = $request->file('avatar');

        $filename = time() . '.' . $avatar->getClientOriginalExtension();

        Image::make($avatar)->resize(150, 150)->save(public_path("uploads\avatars\\") . $filename);

        $user = Auth::user();
        $user->avatar = '/laplace-ess/public/uploads/avatars/' . $filename;
        $user->save();
      }

    //Référence table companies
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
    $companie->url = request('url');

    //update data
    $userId->save();
    $companie->save();

    return redirect ('/lireprofil');
  }

  /**
   * View delete profile
   *
   * 
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
 
            return view('users.deleteProfil', compact('utilisateurs')); 
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
        return redirect('welcome');
      }
      
     DB::table('users')->where('id', $id)->delete();
        return redirect('welcome');
    }
    
}

?>