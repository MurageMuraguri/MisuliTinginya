<?php

namespace App\Http\Controllers;

use App\Income;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IncomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function all(){
        $income = Income::where('id',Auth::id())->get();

        return view('FE.income', ['income' => $income]);
    }

    public function insert(Request $request){
        $request -> validate([
            'productType' => 'required|regex:/[a-zA-Z\s]+/',
            'quantity' => 'required|alpha_num',
            'buyerContact' => 'required',
            'productionDate' => 'required|before_or_equal:today',
            'saleDate' => 'required|before_or_equal:today',
            'price'=>'required|alpha_num'
    ]);

        $productType =  $request->input('productType');
        $quantity = $request->input('quantity');
        $buyerContact = $request->input('buyerContact');
        $productionDate = $request->input('productionDate');
        $saleDate = $request->input('saleDate');
        $price = $request->input('price');
        $total = $quantity*$price;
        $id = Auth::id();

        $newEntry = Income::create([
            'income_name'=>$productType,
            'quantity'=>$quantity,
            'price_per_unit'=>$price,
            'ttl_price'=>$total,
            'buyer_contact'=>$buyerContact,
            'Date_of_production'=>$productionDate,
            'Date_of_sale'=>$saleDate,
            'id'=>$id
        ]);

        return redirect('income')->with('status', 'Income added');

    }

    public function delete($income_id){
        $incomeDelete = Income::findorFail($income_id);

        $incomeDelete->delete();

        return redirect('income')->with('status', 'Income deleted');

    }

    public function edit($income_id ){
        $inEdit = Income::findorFail($income_id);

        return view('FE.editIncome', ['inEdit' => $inEdit]);
    }

    public function update(Request $request){
        $request -> validate([
            'productType' => 'required|regex:/[a-zA-Z\s]+/',
            'quantity' => 'required|alpha_num',
            'buyerContact' => 'required',
            'productionDate' => 'required|before_or_equal:today',
            'saleDate' => 'required|before_or_equal:today',
            'price'=>'required|alpha_num'
        ]);

        $idIn = $request->input('income_id');
        $productType =  $request->input('productType');
        $quantity = $request->input('quantity');
        $buyerContact = $request->input('buyerContact');
        $productionDate = $request->input('productionDate');
        $saleDate = $request->input('saleDate');
        $price = $request->input('price');
        $total = $quantity*$price;


        $updateEntry = Income::find($idIn);

        if($updateEntry){
            $updateEntry->income_name = $productType;
            $updateEntry->quantity = $quantity;
            $updateEntry->price_per_unit=$price;
            $updateEntry->ttl_price=$total;
            $updateEntry->buyer_contact=$buyerContact;
            $updateEntry->Date_of_production=$productionDate;
            $updateEntry->Date_of_sale=$saleDate;

            $updateEntry->save();
        }
        return redirect('income')->with('status','Income information updated');
    }
}
