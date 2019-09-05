<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\FoodItemType;
class Fooditem extends Model
{
    protected $table = "food_items";
    protected $fillable = ['name','description','quantity','price','fooditemtype_id'];
    public $timestamps  = false;
    public function food_item_types(){

    return $this->belongsTo(FoodItemType::class,'fooditemtype_id','id');
    }

}

