<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
  protected $table='user';
  protected $primaryKey='User_id';


  public function Employee()
  {
      return $this->hasMany('App\Employee','User_id', 'User_id');
  }
}
