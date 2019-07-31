<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Employee;

class DashboardController extends Controller
{
    public function dashboard(){

        $employeeData = Employee::all();

        return view("Dashboard",[
            'employees' => $employeeData
        ]);
    }
}
