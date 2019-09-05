<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $table="customers";

    protected $fillable = ['role','name', 'username', 'contact', 'email', 'email_verified_at','password'];

    public function orders(){
        return $this->hasMany(Order::class);
    }
}
