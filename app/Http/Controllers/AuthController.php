<?php

namespace App\Http\Controllers;

use App\Experiment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function beroepsbeeld() {
        return view('beroepsbeeld');
    }

    public function motivation() {
        return view('motivation');
    }

    public function profile() {
        return view('profile');
    }

    public function template() {
        return view('template');
    }

    public function logout() {
        Auth::logout();
        return view('home');

    }

}
