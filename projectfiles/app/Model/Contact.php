<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    // protected $table="contact";
    protected $fillable=['email','address','sendmessage'];
    public $timestamps = false;
}
