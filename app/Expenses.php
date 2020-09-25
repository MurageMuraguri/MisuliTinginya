<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expenses extends Model
{
    protected $table='expenses';
    protected $primaryKey='expenses_id';

    protected $fillable = ['expenses_name','expenses_description','expenses_date','expenses_quantity','expenses_cost_per_unit','expenses_ttl_cost','User_id'];

//    public function User()
//    {
//        return $this->belongsTo('App\User');
//    }

}
