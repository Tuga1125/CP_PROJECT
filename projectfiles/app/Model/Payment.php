<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    
    protected $table="payments";
    protected $fillable=['user_id','payment_date', 'payment_amount', 'payment_type'];
}
