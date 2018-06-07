<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {   
        $menu = 'adminMenu';
        return view('admin.admin', compact('menu'));
    }

    public function indexProposals()
    {   
        $menu = 'menuAdminProposals';
        return view('admin.admin', compact('menu'));
    }
}
