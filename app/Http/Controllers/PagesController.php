<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function error500() {
        return view('errors.500');
    }

    public function error403() {
        return view('errors.403');
    }

    public function contact() {
        $contacts = \App\Contact::all();
        return view('contact')->withContacts($contacts);
    }

}
