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

Route::get('/', function () {
    return view('FE.welcome');
});

Route::get('/login', function () {
    return view('FE.login');
});

Route::get('/dhome', 'DhomeController@all');


/**
 *------------EXPENSES----------
 */
Route::get('/expenses', 'ExpensesController@all');
Route::post('/expenses/save','ExpensesController@insert');
Route::get('/expenses/delete/{expenses_id}', 'ExpensesController@delete');
Route::get('/expenses/edit/{expenses_id}', 'ExpensesController@edit');
Route::post('/expenses/update', 'ExpensesController@update');

/**
 *------------INCOME----------
 */
Route::get('/income', 'IncomeController@all');
Route::post('/income/save','IncomeController@insert');
Route::get('/income/delete/{income_id}', 'IncomeController@delete');
Route::get('/income/edit/{income_id}', 'IncomeController@edit');
Route::post('/income/update', 'IncomeController@update');


/**
*------------EMPLOYEES----------
*/

Route::get('/employee', 'EmployeeController@all');
Route::post('/employee/save', 'EmployeeController@insert');
Route::get('/employee/edit/{Employee_id}', 'EmployeeController@edit');
Route::post('/employee/update', 'EmployeeController@update');
Route::get('/employee/delete/{Employee_id}', 'EmployeeController@delete');


/**
 *
 */
Route::get('/register', function () {
    return view('FE.register');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('FE.home');
