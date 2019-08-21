<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Employee;
use \App\Project;

class DashboardController extends Controller
{
    public function dashboard(){

        $employees = Employee::all();
        $projects = Project::all();

        return view("Dashboard", [
            'employees' => $employees,
            'projects' => $projects 
        ]);
    }
}
