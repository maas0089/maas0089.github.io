<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'role' => 'required|in:student,teacher,family', //validate role input
        ], [
            //Custom error messages to be displayed
            'name.required' => 'Vul een naam in.',
            'name.max' => 'De naam mag niet langer zijn dan 255 tekens.',

            'email.required' => 'Vul een e-mail adres in.',
            'email.email' => 'Vul een geldig e-mail adres in.',
            'email.max' => 'Het e-mail adres mag niet langer zijn dan 255 tekens.',
            'email.unique' => 'Dit e-mail adres is al in gebruik.',

            'password.required' => 'Vul een wachtwoord in.',
            'password.min' => 'Het wachtwoord moet minimaal 6 tekens lang zijn.',
            'password.confirmed' => 'De ingevoerde wachtwoorden komen niet overeen.',

            'role.required' => 'Geef een rol aan.',
            'role.in' => 'Dit is geen geldige rol.',
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
            'password' => Hash::make($data['password']),
            'role' => $data['role'],
        ]);
    }
}
