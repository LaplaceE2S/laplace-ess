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
    
    //Dashboard Admin
    public function index()
    {
        $menu = '';
        return view('admins.admin', compact('menu'));
    }

    //Menu profil
    public function showProfil()
    {
        $menu = 'donnee';
        return view('admins.admin', compact('menu'));
    }

    // Liste des inscrits
    public function indexInscrits()
    {
        $id = Auth::user()->id;

        $utilisateurs = DB::table('companies')
        ->select('companies.*', 'users.*')
        ->where('type', '=', 0)
        ->join('users', 'users.id', '=', 'companies.users_id')
        ->get();

        $menu = 'structures';
        return view('admins.inscrits', compact('utilisateurs', 'menu'));
    }

    // Liste des abonnes
    public function indexAbonnes()
    {
        $id = Auth::user()->id;

        $utilisateurs = DB::table('companies')
        ->select('companies.*', 'users.*')
        ->where('type', '=', 1)
        ->join('users', 'users.id', '=', 'companies.users_id')
        ->get();

        $menu = 'structures';
        return view('admins.abonnes', compact('utilisateurs', 'menu'));
    }

    // Liste des demandes d'abonnements
    public function indexDemandes()
    {
        $id = Auth::user()->id;

        $utilisateurs = DB::table('companies')
        ->select('companies.*', 'users.*')
        ->where('demande', '=', 1)
        ->join('users', 'users.id', '=', 'companies.users_id')
        ->get();

        $menu = 'structures';
        return view('admins.demande', compact('utilisateurs', 'menu'));
    }

    // Afficher le profil de l'utilisateur
    public function showUtilisateur($id)
    {
        $utilisateur = DB::table('companies')
        ->join('users', 'users.id', '=', 'companies.users_id')
        ->where('companies.users_id', '=', $id)
        ->select('companies.*', 'users.email', 'users.avatar')
        ->first();

        $menu ='structures';
        return view('admins.show', compact('utilisateur', 'menu'));
    }

    // user devient abonne
    public function updateRole($id)
    {
        DB::table('users')->where('id', $id)->update(['demande' => 0, 'type' => 1]);

        return redirect()->action('AdminController@indexAbonnes');
    }
}
