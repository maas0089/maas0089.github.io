<?php

namespace App\Http\Controllers;

use App\Experiment;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function index() {
       // $name = request('name', 'Anonymous');
        return view('home');
    }

//    public function opdrachten() {
//        return view('opdrachten');
//    }

//    public function dashboard() {
//
//        $grades = CoursesController::grades();
//
//        return view('dashboard')->withCourseResults($grades);
//    }

    public function contact() {
        $contacts = \App\Contact::all();
        return view('contact')->withContacts($contacts);
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

}
