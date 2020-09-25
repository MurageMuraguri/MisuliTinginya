<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    protected $table='income';
    protected $primaryKey='income_id';

    protected $fillable = ['income_name','quantity','price_per_unit','ttl_price','buyer_contact','Date_of_production','Date_of_sale','User_id'];

//    public function User()
//    {
//        return $this->belongsTo('App\User');
//    }
}
