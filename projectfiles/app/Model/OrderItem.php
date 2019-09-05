<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table="orderitem";
    protected $fillable=['order_quantity','order_price'];
}
