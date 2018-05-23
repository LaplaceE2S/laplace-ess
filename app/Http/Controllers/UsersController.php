<?php 

namespace App\Http\Controllers;

use App\Companies;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserCreateRequest;


class UsersController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */

  public function index()
  {
    $utilisateurs = User::all();

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
    if (auth()->guest()) {

      return redirect('/login');
  }
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