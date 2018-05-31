<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Companies;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Contracts\Auth\Authenticatable;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'avatar' => 'string',
            'structure' => 'required|string|max:255',
            'statut' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     * 
     */
    protected function create(array $data)
    {
        $avatar = "./uploads/avatars/avatar_utilisateur.png";
       
        $user = new User;
            $user->name = $data['name'];
            $user->avatar = $avatar;
            $user->email = $data['email'];
            $user->password = Hash::make($data['password']);
            $user->type = 0;
            $user->save();
            

        $companie = new Companies;
        $compfk = $user->id;
        
        $companie->create([
            'structure' => $data['structure'],
            'statut' => $data['statut'],
            'siret' => 0,
            'nom' => '',
            'prenom' => '',
            'url' => '',
            'ville' => '',
            'postal' => '0',
            'rue' => '',
            'telephone' => '0',
            'budget' => '0',
            'users_id' => $compfk,
        ]);
        
        // $user = new User;
        // $user->name = request('name');
        // $user->email = request('email');
        // $user->avatar = $avatar;
        // $user->password = Hash::make(request('password'));
        // $user->type = User::DEFAULT_TYPE;
        // $user->save();
    
        // $companie = new Companies;
        // $companie->structure = request('structure');
        // $companie->statut = request('statut');
        // $companie->siret = 0;
        // $companie->nom = request('name');
        // $companie->prenom = '';
        // $companie->url = '';
        // $companie->ville = '';
        // $companie->postal = 0;
        // $companie->rue = '';
        // $companie->telephone = 0;
        // $companie->budget = 0;
        // $companie->users_id = $user->id;
        // $companie->save();

    }

}
