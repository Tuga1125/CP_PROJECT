@extends('layouts.front')
@section('content')

  <div class="container pt-4">
    <div class="row">
      <div class="col-md-6">
          <address>
         <h1> <label for="name">CONTACT INFO</label> </h1>
          <p>
              OFOS <br>
              Kupondole, Kathmandu<br>
              Nepal<br>
              <strong>Phone:</strong> +977-9860 240841<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </address>
      </div>
      <div class="col-md-6">
        <form action="{{route('contact.store')}}" method="POST">
        @csrf
        <div class="form-group">
          <label for="email">EMAIL</label>
          <input type="text" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="Enter your email" value="@if(isset($contact)){{$contact->email}} @endif"> 
        </div>
    
        <div class="form-group">
          <label for="address">ADDRESS</label>
          <input type="text" class="form-control" name="address" id="address" aria-describedby="helpId" placeholder="Enter your address" value="@if(isset($contact)){{$contact->address}} @endif"> 
        </div>
        
        <div class="form-group">
          <label for="send message">SEND MESSAGE</label>
          <textarea class="form-control" name="send_message" placeholder="Enter message you want to send."id="" rows="3" value="@if(isset($contact)){{$contact->sendmessage}} @endif"></textarea>
        </div>
       
       
        <button type="submit" class="btn btn-primary">SUBMIT</button>
        <button type="submit" class="btn btn-primary">CANCEL</button>
      </form>
      </div>
    </div>
  </div>
  @endsection
