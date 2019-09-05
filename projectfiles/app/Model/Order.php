<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table="orders";
    protected $fillable=['customers_id','order_date','status','payment_status'];

    public function customers(){
        return $this->belongsTo(Customers::class,'customers_id','id');
        }
}
