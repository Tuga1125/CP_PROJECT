<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    
    protected $table="administrators";
    protected $fillable = ['fname', 'lname', 'username', 'password', 'status',];
}
