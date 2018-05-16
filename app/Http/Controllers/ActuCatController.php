<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ActuCatRequest;
use DB;
use App\Quotation;

class ActuCatController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $cats =  DB::table('actuCat')->get();
    return view('catActuIndex',compact('cats'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(ActuCatRequest $request)
  { 
    $tableau = $request->all();
    unset($tableau['_token']);
    DB::table('actuCat')->insert(
      $tableau
    );
    $title = 'nouvelle catégorie créer';
    
    $msg = $tableau['name'].$tableau['description'];
    return view('confirmAdmin', compact('title','msg'));
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