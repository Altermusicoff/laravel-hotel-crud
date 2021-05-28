<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('employees', 'EmployeeController@index')->name('employees');
Route::get('employees/{id}', 'EmployeeController@show')->name("show-employee");
Route::get('employees-form', 'EmployeeController@create')->name("create-employee");
Route::get('edit/{id}', 'EmployeeController@edit') ->name("edit-employee");
Route::post('employees', 'EmployeeController@store')->name("store-employee");
Route::get('destroy/{id}', 'EmployeeController@destroy')->name("destroy-employee");
Route::post('update/{id}', 'EmployeeController@update')->name("update-employee");