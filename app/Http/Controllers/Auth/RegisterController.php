<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use Illuminate\Support\Facades\Auth;

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
        $this->middleware('auth:admin');
    }


    public function showRegistrationForm()
    {
        return view('user.auth.register');
    }


    protected function guard()
    {
        return Auth::guard('user');
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'identidade' => ['required', 'string', 'digits:11'],
            'genero' => ['required', 'string', 'max:20'],
            'entrada' => ['required', 'string', 'max:30'],
            'saida' => ['required', 'string', 'max:30'],
            'foto' => ['string', 'max:255'],
            'telefone_1' => ['required', 'string', 'max:11'],
            'telefone_2' => ['string', 'max:11'],
            'cargo' => ['required', 'string', 'max:30'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'condominio_id' => ['required', 'string', 'min:1', 'max:20'],
            'role_id' => ['required', 'in:2,3'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'identidade' => $data['identidade'],
            'genero' => $data['genero'],
            'entrada' => $data['entrada'],
            'saida' => $data['saida'],
            'foto' => $data['foto'],
            'telefone_1' => $data['telefone_1'],
            'telefone_2' => $data['telefone_2'],
            'cargo' => $data['cargo'],
            'password' => Hash::make($data['password']),
            'condominio_id' => $data['condominio_id'],
            'role_id' => $data['role_id'],
        ]);
    }
}
