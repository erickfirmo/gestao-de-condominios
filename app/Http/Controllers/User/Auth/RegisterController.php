<?php

namespace App\Http\Controllers\User\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Requests\UserRequest;
use Illuminate\Auth\Events\Registered;
use Session;
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
    protected $redirectTo = '/usuarios';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:user');
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
            'nome' => ['required','max:255','string'],
            'email' => ['required','max:255','string','email','unique:users'],
            'identidade' => ['required','min:10','unique:users','max:11','string'],
            'genero' => ['required','max:20','in:Masculino,Feminino,Não Definido','string'],
            'entrada' => ['required','max:5', 'min:4','string'],
            'saida' => ['required','max:5', 'min:4', 'string'],
            'telefone_1' => ['required','min:10','max:11','string'],
            'telefone_2' => ['min:10','max:11','string'],
            'cargo' => ['required','max:30','string'],
            'password' => ['required','min:6','max:255','string'],
            'role_id' => ['required','in:2,3','max:1','string'],
            'foto' => ['max:255'],
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
            'name' => $data['nome'],
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
            'condominio_id' => Auth::user()->condominio_id,
            'role_id' => $data['role_id'],
        ]);
    }

    public function register(UserRequest $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        // $this->guard()->login($user);

        Session::flash('success', 'Usuário cadastrado com sucesso!');

        return $this->registered($request, $user)
                        ?: redirect($this->redirectPath());
    }
}
