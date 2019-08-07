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
            'fName' => ['required','min:3','max:12','string'],
            'lName' => ['required','min:3','max:12','string'],
            'position' => ['required','min:1','max:24','string'],
            'level' => ['required','min:1','max:1000','integer']
            ]);

        $employee->create($validatedData);

        return redirect('/');
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
            'fName' => ['required','min:3','max:12','string'],
            'lName' => ['required','min:3','max:12','string'],
            'position' => ['required','min:1','max:24','string'],
            'level' => ['required','min:1','max:1000','integer']
            ]);
            
        $employee->update($validatedData);

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Employee::findOrFail($id)->delete();

        return redirect('/');
    }
}
