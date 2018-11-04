<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Accidents;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The username field
     * 
     * @return string 
     */
    public function username() {
        

        return 'username';
        
    }

    /**
     * The user reported accidents
     * 
     * @return App\Models\Accidents
     */
    public function accidents()
    {

        return $this->hasMany(Accidents::class);
        
    }
}
