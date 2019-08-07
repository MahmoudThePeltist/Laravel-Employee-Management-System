<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Employee;

class DashboardController extends Controller
{
    public function dashboard(){

        $employees = Employee::all();

        return view("Dashboard", compact('employees'));
    }
}
