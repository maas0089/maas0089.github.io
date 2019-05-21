<?php

namespace App\Http\Controllers;

use App\Term;
use App\Course;
use Illuminate\Http\Request;

class TermsController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('student');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $terms = \App\Term::all();

        return view('terms/index')->withTerms($terms);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Term  $term
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
//        $sighting = Sighting::findOrFail($id);
        return view('courses.show')->withCourse($course);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Term  $term
     * @return \Illuminate\Http\Response
     */
    public function edit(Term $term)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Term  $term
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Term $term)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Term  $term
     * @return \Illuminate\Http\Response
     */
    public function destroy(Term $term)
    {
        //
    }
}
