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

Route::get('/home', function () {
    return view('FE.home');
});
Route::get('/expenses', function () {
    return view('FE.expenses');
});
Route::get('/income', function () {
    return view('FE.income');
});
Route::get('/employee', function () {
    return view('FE.employee');
});
Route::get('/register', function () {
    return view('FE.register');
});
