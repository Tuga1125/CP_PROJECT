<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class FoodItemType extends Model
{
    protected $table = "food_item_types";
    protected $fillable = ['name'];
    public $timestamps  = false;

    public function food_items(){
        return $this->hasMany(Fooditem::class);
    }
}
