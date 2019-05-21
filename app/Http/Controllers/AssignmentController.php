<?php

namespace App\Http\Controllers;

use App\Assignment;
use Illuminate\Http\Request;

class AssignmentController extends Controller
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
        $assignments = Assignment::all();
        return view('assignments.index')->withAssignments($assignments);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('assignments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Assignment::create(request()->all());
//        Assignment::create([
//            'project_name' => request('project_name'),
//            'image_url' => request('image_url'),
//            'description' => request('description')
//        ]);

        return redirect(route('opdrachten.index'))->withSuccess('Item toegevoegd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function show(Assignment $assignment)
    {
        return view('assignments.show')->withAssignment($assignment);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function edit(Assignment $assignment)
    {
        return view('assignments.edit')->withAssignment($assignment);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Assignment $assignment)
    {
        $assignment->project_name = $request->get('project_name');
        $assignment->image_url = $request->get('image_url');
        $assignment->description = $request->get('description');
        $assignment->save();

        return redirect(route('opdrachten.index'))->withSuccess('Wijziging opgeslagen!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Assignment $assignment)
    {
        $assignment->delete();

        return redirect(route('opdrachten.index'))->with('success', 'Opdracht verwijderd!');
    }
}
