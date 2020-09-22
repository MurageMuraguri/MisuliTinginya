<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //Returns Welcomepage
    public function welcomePage(){
      return view('FE.welcome');
    }
    //Returns home page
    public function homePage(){
      return view('FE.home');
    }
    //Returns Login page
    public function loginPage(){
      return view('FE/login');
    }
    //Returns income page
    public function incomePage(){
      return view('FE/income');
    }
    //Returns expenses page
    public function expensesPage(){
      return view('FE/expenses');
    }
    //Returns exmployees page
    public function employeePage(){
      return view('FE/employee');
    }
}
}
