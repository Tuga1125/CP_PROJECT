<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Model\Fooditem;
use App\Model\FoodItemType;
use Image;

class FoodItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $fooditemtypes = FoodItemType::all();
        $fooditems = Fooditem::all();
       // dd($fooditems);
        return view("fooditem.create", compact('fooditems','fooditemtypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
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
        
        $validation =  Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'description'=>['required','string'],
            'price' => ['required', 'string', 'max:255'],
            'fooditemtype_id' => ['required','integer'],
  
        ]);

        // dd($validation->errors());

        if($validation->passes()){
            	// Handle the user upload of avatar
    
                $fooditem['name'] = $request->name;
                $fooditem['description']=$request->description;
                $fooditem['price']=$request->price;
    
                $fooditem['fooditemtype_id'] = $request->fooditemtype_id;
    
                Fooditem::create($fooditem);
                // dd($validation->errors());
                return back()->with('errors', $validation->errors());
        }else{
            return back()->with('errors', $validation->errors());
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
        $fooditemtypes = FoodItemType::all();

        $fooditems= Fooditem::all();

        $fooditem= Fooditem::find($id);
        return view("fooditem.create", compact('fooditems', 'fooditem', 'fooditemtypes'));
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
        // dd($request->all());
        $validation =  Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'description'=>['required','string','max:255'],
            'price' => ['required', 'string', 'max:255'],
            'fooditemtype_id' => ['required','integer'],
  
        ]);

            //check for validation pass or not
        if($validation->passes()){
            $data['name'] = $request->name;
            $data['description']=$request->description;
            $data['price']=$request->price;
            $data['fooditemtype_id'] = $request->fooditemtype_id;
        
            $fooditem = Fooditem::findOrFail($id);
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
        $fooditem = Fooditem::findOrFail($id);
        $fooditem->delete($id);

        return back();
    }
}
