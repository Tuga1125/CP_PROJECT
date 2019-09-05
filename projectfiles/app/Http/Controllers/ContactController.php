<?php

namespace App\Http\Controllers;

use App\Model\Contact;
use Illuminate\Http\Request;
use Validator;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts= Contact::all();
        return view("front.contact", compact('contacts'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contacts= Contact::all();
        return view("front.contact", compact('contacts'));   
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
                    'email' => ['required', 'string', 'max:100'],
                    'address'=>['required','string','max:100'],
                    'sendmessage' => ['required', 'string'],
          
                ]);
        
                // dd($validation->errors());
        
                if($validation->passes()){
                        // Handle the user upload of avatar
            
                        $contact['email'] = $request->email;
                        $contact['address']=$request->address;
                        $contact['sendmessage']=$request->sendmessage;
            
                        Contact::create($contact);
                        // dd($validation->errors());
                        return back()->with('errors', $validation->errors());
                }else{
                    return back()->with('errors', $validation->errors());
                }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact= Contact::all();

        $Contacts= Contact::find($id);
        return view("front.contact", compact('contact', 'contacts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
                
        
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
