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
    return view('FE/welcome');
});

Route::get('/login.php', function () {
    return view('FE/login');
});

Route::get('/home.php', function () {
    return view('FE/home');
});
Route::get('/expenses.php', function () {
    return view('FE/expenses');
});
Route::get('/income.php', function () {
    return view('FE/income');
});
Route::get('/employee.php', function () {
    return view('FE/employee');
});
