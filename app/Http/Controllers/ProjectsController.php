<?php

namespace App\Http\Controllers;

use App\Project;
use App\Employee;
use App\mail\ProjectCreated;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Project $project)
    {
        // $projects = $project->where('owner_id', auth()->id())->get(); The old way of getting the user's projects

        $projects = auth()->user()->owned_projects;

        return view('projects.index', compact('projects'));
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
    public function store(Project $project)
    {
        $validatedData = request()->validate([
            'name' => ['required','string'],
            'description' => ['required','string']
        ]);
        
        $validatedData = $validatedData + ['owner_id' => auth()->id()];

        $project = Project::create($validatedData);

        \Mail::to($project->owner->email)->send(
            new ProjectCreated($project)
        );

        return redirect('/projects');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        $employees = Employee::get();
        
        return view('projects.show',[
            'project' => $project,
            'employees' => $employees
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('projects.edit',compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $validatedData = request()->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $project->update($validatedData);

        return redirect('/projects');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect('/projects');
    }

    public function deassign($id, $employee_id){
        $project = Project::find($id);
        $employee = Employee::find($employee_id);

        $project->employees()->detach($employee);
        
        return back();
    }
    public function assign($id){
        $validatedData = request()->validate([
            'employee_id' => ['required']
        ]);
        
        $project = Project::find($id);

        $employee = Employee::find($validatedData['employee_id']);
        
        $project->employees()->attach($employee);

        return back();
    }
}
