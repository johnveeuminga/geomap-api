<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\AccidentPhotos;


class Accident extends Model
{
  //

  /**
   * The user who reported the accident
   * 
   * @return App\User The user
   */
  public function user() 
  {

    return $this->belongsTo(User::class);

  }

  /**
   * Photos of the accident
   * 
   * @return Illuminate\Database\Eloquent\Collection
   */
  public function photos()
  {
    
    return $this->hasMany(AccidentPhotos::class);
    
  }
}
