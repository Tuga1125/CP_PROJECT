<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    // protected $table="contact";
    protected $fillable=['email','address','send_message'];
    public $timestamps = false;
}
