<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\OrderItem;
use Validator;


class OrderItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            $validation =  Validator::make($request->all(), [
            'order_id' => ['required', 'integer'],
            'food_item_id'=>['required','integer'],
            'quantity'=>['required','string','max:255'],
            'price'=>['required','string'],

  
        ]);
           // dd($validation->errors());

           if($validation->passes()){
            // Handle the user upload of avatar

            $orderitem['order_id'] = $request->order_id;
            $orderitem['food_item_id']=$request->food_item_id;
            $orderitem['quantity']=$request->quantity;
            $orderitem['price']=$request->price;

            $orderitem['fooditemtype_id'] = $request->fooditemtype_id; 

            Orderitem::create($orderitem);
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
        //
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
    }
}
