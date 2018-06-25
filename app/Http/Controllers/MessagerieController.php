<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MessagerieRequest;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Messagerie;

class MessagerieController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $id = Auth::user()->id;
    $messages = DB::table('messagerie')
    
    ->select('messagerie.*','companies.structure','companies.id as structkey')
    ->join('users', 'users.id', '=', 'messagerie.id_user')
    ->join('companies', 'companies.users_id', '=', 'users.id')
    ->where([['messagerie.id_dest', '=', $id],['messagerie.id_user', '!=', $id]])
    ->orderBy('messagerie.created_at', 'desc')
    ->paginate(5);
    
    
    
    $menu = 'message';
    return view('message.user.all', compact('messages','menu'));
  }


    /**
   * Display a listing of the send message.
   *
   * @return Response
   */
  public function sendBox()
  {
    $id = Auth::user()->id;
    $messages = DB::table('messagerie')
    
    ->select('messagerie.*','companies.structure','companies.id as structkey')
    ->join('users', 'users.id', '=', 'messagerie.id_dest')
    ->join('companies', 'companies.users_id', '=', 'users.id')
    ->where([['messagerie.id_user', '=', $id],['messagerie.id_dest', '!=', $id]])
    ->orderBy('messagerie.created_at', 'desc')
    ->paginate(5);
    
    
    
    $menu = 'message';
    return view('message.user.all', compact('messages','menu'));
  }

  /**
   * Lire un message
   *
   * @return Response
   */
  public function read(Request $request)
  {

    $id = Auth::user()->id;
    $dest = $request->companieId;

    
    $messages = DB::table('messagerie')
    //selection
    ->select('messagerie.*','companies.structure','companies.id as structkey')
    //jointures des tables
    ->join('users', 'users.id', '=', 'messagerie.id_user')
    ->join('companies', 'companies.users_id', '=', 'users.id')
    //choix des messages recu
    ->where([['messagerie.id_dest', '=', $id],['messagerie.id_user', '=', $dest]])
    // ou des messages envoyés
    ->orWhere([['messagerie.id_dest', '=', $dest],['messagerie.id_user', '=', $id]])
    ->orderBy('messagerie.created_at', 'desc')
    ->get();

    
    $menu = 'message';
    return view('message.user.read', compact('messages','menu','dest'));

  }

    /**
   * répondre a un message
   *
   * @return Response
   */
  public function formAnswer(Request $request)
  {
    $messages='';
    $dest= $request->dest;
    $req = DB::table('companies')
    ->select('companies.id','companies.structure')
    ->where('companies.id', '=', $dest)
    ->get();
    $dest = $req[0]->structure;

    $menu = 'message';
    return view('message.user.answer', compact('messages','menu','dest'));
  }


  public function storeAnswer(Request $request)
  {
    

    $verif = DB::table('companies')
    ->select('companies.structure','companies.id')
    ->where('companies.structure', '=', $request->choixDestinataire)
    ->get();


    $id = Auth::user()->id;
    if(isset($verif[0])){
      $message = Messagerie::create([
        'id_user' => $id,
        'objet' => request('objet'),
        'message' => request('message'),       
        'id_dest' => $verif[0]->id,
        'id_proposal' => NULL,
        'is_view'=> 0,
        'is_purpose'=> 0,
        ]);
        $title = "Confirmation de l'envoie du message";
        $msg = "Merci , le message a bien été envoyé.";
    }
    else{
      $title = "Erreur lors l'envoie du message";
      $msg = "Merci , de vérifié les champs.";
    }
    $menu = 'message';
    return view('users.confirmCreate', compact('msg','menu','title'));
  
  }
  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    
    $messages='';
    $menu = 'message';
    $d = \DB::table('companies')
    ->select('id','structure')
    ->get();
    $datas = array(
    );

    foreach ($d as $key => $value) {
      $datas[$key]['id'] = $value->id;
      $datas[$key]['structure'] = $value->structure;
    }
    return view('message.user.form', compact('messages','menu','datas'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {

  }


    /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function newStore(MessagerieRequest $request)
  {

    $verif = DB::table('companies')
    ->select('companies.structure','companies.id')
    ->where('companies.structure', '=', $request->choixDestinataire)
    ->get();


    $id = Auth::user()->id;
    if(isset($verif[0])){
      $message = Messagerie::create([
        'id_user' => $id,
        'objet' => request('objet'),
        'message' => request('message'),       
        'id_dest' => $verif[0]->id,
        'id_proposal' => NULL,
        'is_view'=> 0,
        'is_purpose'=> 0,
        ]);
        $title = "Confirmation de l'envoie du message";
        $msg = "Merci , le message a bien été envoyé.";
    }
    else{
      $title = "Erreur lors l'envoie du message";
      $msg = "Merci , de vérifié les champs.";
    }
    $menu = 'message';
    return view('users.confirmCreate', compact('msg','menu','title'));
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