<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class  EmployeeController extends Controller
{
     public function __construct()
{
    $this->middleware('auth');
}
    public function all(){
        $employees = Employee::where('id',Auth::id())->get();

      //  dd($employees);

        return view('FE.employee',['employees' => $employees]);
    }

    public function insert(Request $request){
        /*Validation*/

        $request -> validate([
            'employeeName'=>'required|regex:/[a-zA-Z\s]+/',
            'employeeRole'=>'required|regex:/[a-zA-Z\s]+/',
            'employeeHire'=>'required',
            'employeeContact'=>'required|alpha_num',
            'employeeID'=>'required|alpha_num',
            'employeeSalary'=>'required|alpha_num'
        ]);

       $name = $request->input('employeeName');
       $role = $request->input('employeeRole');
       $hireDate = $request->input('employeeHire');
       $contact = $request->input('employeeContact');
       $id = $request->input('employeeID');
       $salary = $request->input('employeeSalary');






    $newEntry = Employee::create([
         'Emp_name'=>$name,
         'Emp_role'=>$role,
         'Emp_contact'=>$contact,
         'Date_of_hiring'=>$hireDate,
        'id_number'=>$id,
        'Passport_photo'=>'not established',
        'salary'=>$salary,
        'id'=>Auth::id()
    ]);
  //   dd($photo_name);
        return redirect('employee')->with('status','New employee added');
     }

     public function edit($Employee_id){
        $employeeEdit = Employee::findorFail($Employee_id);

         return view('FE.editEmployee',['employeeEdit' => $employeeEdit]);
     }

     public function update(Request $request){
         $request -> validate([
             'employeeName'=>'required|regex:/[a-zA-Z\s]+/',
             'employeeRole'=>'required|regex:/[a-zA-Z\s]+/',
             'employeeHire'=>'required',
             'employeeContact'=>'required|alpha_num',
             'employeeID'=>'required|alpha_num',
             'employeeSalary'=>'required|alpha_num'
         ]);

         $idEm = $request->input('Employee_id');
         $name = $request->input('employeeName');
         $role = $request->input('employeeRole');
         $hireDate = $request->input('employeeHire');
         $contact = $request->input('employeeContact');
         $id = $request->input('employeeID');
         $salary = $request->input('employeeSalary');


         $updateEntry = Employee::find($idEm);

         if($updateEntry){
                    $updateEntry -> Emp_name = $name;
                    $updateEntry->Emp_role =$role;
                   $updateEntry->Emp_contact = $contact;
                   $updateEntry->Date_of_hiring = $hireDate;
                    $updateEntry->id_number = $id;
                    $updateEntry -> salary = $salary;

            $updateEntry->save();


         }

         return redirect('employee')->with('status','Employee information updated');
     }

    public function delete($Employee_id){
        $employeeDelete = Employee::findorFail($Employee_id);

        $employeeDelete->delete();

        return redirect('employee')->with('status','Employee information deleted');
    }
}
