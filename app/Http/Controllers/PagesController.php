<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Employee;
use \App\User;

class PagesController extends Controller
{
    public function login(){
        return view('login');
    }
    
    public function post(){
        $email = request('email');
        $password = request('password');
        
        return redirect('/');
    }
}
