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
        $employeeData = $employee->all();
        return $employeeData;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Employee $employee)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Employee $employee)
    {
        $employee = new Employee();
        $employee->fName = $request->fName;
        $employee->lName = $request->lName;
        $employee->position = $request->position;
        $employee->level = $request->level;
        $employee->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        
        return view('edit-employee',[
            'employee' => $employee
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);

        $employee->fName = $request->fName;
        $employee->lName = $request->lName;
        $employee->position = $request->position;
        $employee->level = $request->level;

        $employee->save();

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
