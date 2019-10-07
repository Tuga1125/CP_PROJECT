<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use App\User;
use App\Model\Order;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers=User::where('user_role',2)->get();
        $orders= Order::all();
        return view("orders.order", compact('orders','customers'));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers=User::where('user_role', 2)->get();
        $orders= Order::all();
        return view("orders.order", compact('orders','customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd(Auth::customer());
        //  dd($request->all());
        
                $validation =  Validator::make($request->all(), [
                    'user_id' => ['required', 'string', 'max:100'],
                    'order_date'=>['required','string','max:100'],
                    'status' => ['required', 'string'],    
                    'quantity' => ['required','integer','min:1']
                ]);

        
                // dd($validation->errors());
        
                if($validation->passes()){
                        // Handle the user upload of avatar
                       
                        $orders = new Order();
                        $orders['user_id'] = $request->user_id;
                        $orders['order_date']= $request->order_date;
                        $orders['status']= $request->status;
                        $orders['quantity']= $request->quantity;
                        // dd($orders);
                        Order::create([
                        'user_id' => $request->user_id,
                        'order_date'=> $request->order_date,
                        'status'=> $request->status,
                       'quantity'=> $request->quantity
                        ]);
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
