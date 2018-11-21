<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Accident;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

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

        return $this->hasMany(Accident::class);
        
    }

    public function findForPassport($username)
    {

        return $this->where('username', $username)->first();
        
    }
}
