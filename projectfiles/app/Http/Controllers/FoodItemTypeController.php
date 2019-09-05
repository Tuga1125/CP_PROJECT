<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\FoodItemType;
use Validator;

class FoodItemTypeController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fooditemtypes= FoodItemType::all();
        return view("fooditem.type.create", compact('fooditemtypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    //
    $fooditemtypes= FoodItemType::all();
    return view("fooditem.type.create", compact('fooditemtypes'));    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validation = Validator::make($request->all(),[
            'name'=> ['required','string','max:40'],
        ]); 
        if ($validation->passes()){
            $data['name'] = $request->name;

            FoodItemType::create($data);
            return back()->with ('errors',$validation->errors());
        }else{
           return back()->with ('errors', $validation->errors());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $fooditemtypes = FoodItemType::all();

        $food_item_type= FoodItemType::find($id);
        return view("fooditem.type.create", compact('food_item_type', 'fooditemtypes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
 // dd($request->all());
 $validation = Validator::make($request->all(),[
    'name'=> ['required','string','max:40'],
]); 
if ($validation->passes()){
    $data['name'] = $request->name;

    $fooditem = FoodItemType::findOrFail($id);
    $fooditem->update($data);
    return back()->with ('errors',$validation->errors());
}else{
   return back()->with ('errors', $validation->errors());
}
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $fooditemtype = FoodItemType::findOrFail($id);
        $fooditemtype->delete($id);

        return back();

    }
}
