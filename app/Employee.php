<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class   Employee extends Model
{
    protected $table='employee';
    protected $primaryKey='Employee_id';

    protected $fillable = ['Emp_name','Emp_role','Emp_contact','Date_of_hiring','id_number','Passport_photo','salary','User_id'];
    //relationships
//    public function User()
//    {
//        return $this->belongsTo('App\User');
//    }


}

