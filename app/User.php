<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname','lname', 'email','user_type','store_location', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

     public function is_admin()
    {
        if($this->user_type=='admin'){

            return true;
        }

        return false;
    }

    public function is_seller()
    {
        if($this->user_type=='seller'){
            
            return true;
        }

        return false;
    }
    public function is_accountant()
    {
        if($this->user_type=='accountant'){
            
            return true;
        }

        return false;
    }
    public function is_stocker()
    {
        if($this->user_type=='stocker'){
            
            return true;
        }

        return false;
    }
}
