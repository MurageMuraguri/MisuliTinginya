<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table='employee';
    protected $primaryKey='Employee_id';
    //relationships
    public function users()
    {
        return $this->belongsTo('App\users');
    }
}
