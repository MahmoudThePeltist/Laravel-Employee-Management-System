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

Route::get('/', 'DashboardController@dashboard')->name('Dashboard')->middleware('auth');

Route::resource('employees','EmployeesController')->middleware('auth');

Route::resource('projects','ProjectsController')->middleware('auth');
Route::post('/projects/{project}/deassign/{employee}', 'ProjectsController@deassign')->middleware('auth');
Route::post('/projects/{project}/assign', 'ProjectsController@assign')->middleware('auth');

Route::resource('tasks','TasksController')->middleware('auth');
Route::post('/projects/{project}/tasks','TasksController@store')->middleware('auth');

// Route::get('/login', 'PagesController@login');
// Route::post('/login', 'PagesController@post');

Auth::routes();
