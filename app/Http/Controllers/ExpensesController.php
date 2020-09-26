<?php

namespace App\Http\Controllers;

use App\Expenses;
use Illuminate\Http\Request;

class ExpensesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function all()
    {
        $expenses = Expenses::all();

        return view('FE.expenses', ['expenses' => $expenses]);
    }

    public function insert(Request $request)
    {
        $request->validate([
            'expenseName' => 'required|regex:/[a-zA-Z\s]+/',
            'expenseDate' => 'required|before_or_equal:today',
            'expenseDescription' => 'required',
            'expenseAmount' => 'required|alpha_num',
            'expenseQuantity' => 'required|alpha_num',
        ]);

        $name = $request->input('expenseName');
        $date = $request->input('expenseDate');
        $description = $request->input('expenseDescription');
        $amount = $request->input('expenseAmount');
        $quantity = $request->input('expenseQuantity');
        $total = $amount * $quantity;


        $newEntry = Expenses::create([
            'expenses_name' => $name,
            'expenses_description' => $description,
            'expenses_date' => $date,
            'expenses_quantity' => $quantity,
            'expenses_cost_per_unit' => $amount,
            'expenses_ttl_cost' => $total,
            'id' => 1
        ]);

        return redirect('expenses')->with('status', 'Expense added');
    }

    public function delete($expenses_id)
    {
        $expenseDelete = Expenses::findorFail($expenses_id);

        $expenseDelete->delete();

        return redirect('expenses')->with('status', 'Expense deleted');
    }

    public function edit($expenses_id)
    {
        $expensesEdit = Expenses::findorFail($expenses_id);

        return view('FE.editExpenses', ['expensesEdit' => $expensesEdit]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'expenseName' => 'required|regex:/[a-zA-Z\s]+/',
            'expenseDate' => 'required',
            'expenseDescription' => 'required',
            'expenseAmount' => 'required|alpha_num',
            'expenseQuantity' => 'required|alpha_num',
        ]);

        $idEm = $request->input('expenses_id');
        $name = $request->input('expenseName');
        $date = $request->input('expenseDate');
        $description = $request->input('expenseDescription');
        $amount = $request->input('expenseAmount');
        $quantity = $request->input('expenseQuantity');
        $total = $amount * $quantity;

        $updateEntry = Expenses::find($idEm);

        if ($updateEntry) {
            $updateEntry->expenses_name = $name;
            $updateEntry->expenses_description = $description;
            $updateEntry->expenses_date = $date;
            $updateEntry->expenses_quantity = $quantity;
            $updateEntry->expenses_cost_per_unit = $amount;
            $updateEntry->expenses_ttl_cost = $total;


            $updateEntry->save();
        }
        return redirect('expenses')->with('status','Expense information updated');
    }
}
