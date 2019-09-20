<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table="orders";
    protected $fillable=['user_id','order_date','status','quantity'];

    public function customers(){
        return $this->belongsTo(Customers::class,'customers_id','id');
        }
}
