<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\AccidentPhotos;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;


class Accident extends Model implements HasMedia
{
  use HasMediaTrait;

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
