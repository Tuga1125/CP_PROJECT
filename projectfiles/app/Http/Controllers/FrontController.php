<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\FoodItem;
use App\Model\FoodItemType;


class FrontController extends Controller
{

    public function index(){

    //
    $fooditems = FoodItem::all();
    $fooditemtypes = FoodItemType::all();
        return view('front.home', compact('fooditems', 'fooditemtypes'));
    }
}
