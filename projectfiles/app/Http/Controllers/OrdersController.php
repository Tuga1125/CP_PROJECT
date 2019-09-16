<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use App\customer;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $orders= Order::all();
        return view("orders.order", compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $orders= Order::all();
        return view("orders.order", compact('orders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd(Auth::customer()); // dd($request->all());
        
                $validation =  Validator::make($request->all(), [
                    'user_id' => ['required', 'string', 'max:100'],
                    'order_date'=>['required','string','max:100'],
                    'status' => ['required', 'string'],
                    'created_at'=>['required','string','max:100'],
                    'updated_at'=>['required','string','max:100'],
          
                ]);
        
                // dd($validation->errors());
        
                if($validation->passes()){
                        // Handle the user upload of avatar
            
                        $orders['user_id'] = $request->user_id;
                        $orders['order_date']=$request->order_date;
                        $orders['status']=$request->status;
                        $orders['created_at']=$request->created_at;
                        $orders['updated_at']=$request->updated_at;
            
                        Order::create($orders);
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
        $order= Order::all();

        $orders= Order::find($id);
        return view("orders.order", compact('order', 'orders'));
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
