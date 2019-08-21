<?php

namespace App\Http\Controllers;

use DummyFullModelClass;
use App\Employee;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Employee $employee)
    {
        $employees = $employee->all();

        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Employee $employee)
    {
        dd('Create a fun little creation menu...');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Employee $employee)
    {
        $validatedData = request()->validate([
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'position' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:employees'],
            'level' => ['required','integer','max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $employee->create($validatedData);

        return redirect('/employees');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        return view('employees.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        
        return view('employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Employee $employee)
    {
        $validatedData = request()->validate([
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'position' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'level' => ['required','integer','max:255'],
        ]);
            
        $employee->update($validatedData);

        return redirect('/employees');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $project->delete();

        return redirect('/employees');
    }
}
