<?php

namespace App\Http\Controllers;

use App\Expenses;
use App\Income;
use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DhomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function all(){
        $totalExpense = Expenses::where('id',Auth::id())->sum('expenses_ttl_cost');
        $totalIncome =  Income::where('id',Auth::id())->sum('ttl_price');
        $totalEmployee = Employee::where('id',Auth::id())->count();

        return view('FE.dhome',[
            'totalExpense'=>$totalExpense,
            'totalIncome'=>$totalIncome,
            'totalEmployee'=>$totalEmployee
        ]);
    }
}
