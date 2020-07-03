<?php

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

Route::get('/', 'MainController@index');

Route::get('lang/{locale}', 'MainController@lang');

// Auth routes, excluding Register
Auth::routes(['register' => false]);

// Resources routes for Companies and Employees
Route::resources([
    'companies' => 'CompanyController',
    'employees' => 'EmployeeController'
]);

Route::get('company_employees/{company}', 'CompanyController@getEmployees');

Route::get('/home', 'HomeController@index')->name('home');
