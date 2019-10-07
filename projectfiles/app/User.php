<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'name', 'email', 'password','user_role'
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
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class,'customers_id','id');

    }

    public function fooditems()
    {
        return $this->hasMany(Fooditem::class, 'id', 'customers_id');
    }

    public function customers()
    {
        return $this->belongsTo(Customers::class,'customers_id','id');
    }

 


    public function checkRole()
    {
        if ($this->user_roles->name == 'Customer') {
            return true;
        } else {
            return false;
        }
    }


    public function checkAdmin()
    {
        if ($this->user_roles->name == 'Admin') {
            return true;
        } else {
            return false;
        }
    }
    }
