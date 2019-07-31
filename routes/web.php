<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'DashboardController@dashboard');

// Route::get('/employees', 'EmployeesController@index');
// Route::get('/employees/{employee}', 'EmployeesController@show');
// Route::get('/employees/create', 'EmployeesController@create');
// Route::get('/employees/{employee}/edit', 'EmployeesController@edit');
// Route::post('/employees', 'EmployeesController@store');
// Route::patch('/employees/{employee}', 'EmployeesController@update');
// Route::delete('/employees/{employee}', 'EmployeesController@destroy');

Route::resource('employees','EmployeesController');

Route::get('/login', 'PagesController@login');
Route::post('/login', 'PagesController@post');
