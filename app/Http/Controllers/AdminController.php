<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Companies;
use App\User;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {   
        $menu = '';
        return view('admins.admin', compact('menu'));
    }

    public function showProfil()
    {   
        $menu = 'donnee';
        return view('admins.admin', compact('menu'));
    }

    public function indexUtilisateurs()
    {
        $id = Auth::user()->id;

        $utilisateurs = DB::table('companies')
        ->select('companies.*', 'users.*')
        ->join('users', 'users.id', '=', 'companies.users_id')
        ->get();

        $menu = 'structures';
        return view('admins.utilisateurs', compact('utilisateurs', 'menu'));
       
    }

}
