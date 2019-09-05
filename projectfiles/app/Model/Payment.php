<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    
    protected $table="payments";
    protected $fillable=['payment_date', 'payment_amount', 'payment_type'];
}
