<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Employee;

class EmployeesController extends Controller
{
    
    public function store(){
        $employee = new Employee();
        $employee->fName = request('fName');
        $employee->lName = request('lName');
        $employee->position = request('position');
        $employee->level = request('level');
        $employee->save();

        return redirect('/');
    }
}
