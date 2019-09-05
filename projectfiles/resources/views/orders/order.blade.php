@extends('layouts.app')

@section('content')

  <div class="container">
  @if(isset($order))
  <form action="{{route('orders.update', $order->id)}}" method="POST">
      @csrf
      @method('PUT')
@else 
     
      <form action="{{route('orders.store')}}" method="POST">
      @csrf
    @endif
    <div class="form-group">
      <label for="customers_id">User Id </label>
  
    <select class="form-control" name="customers_id " id="">
    @foreach($customers as $data)
    <option value="{{$data->id}}">{{$data->name}}</option>
    @endforeach
    </select>
  </div>

    <div class="form-group">
      <label for="order_date">Order date</label>
      <input type="text" class="form-control" name="orderdate" id="order_date" aria-describedby="helpId" placeholder="Enter order date" value="@if(isset($food_item)){{$orders->order_date}} @endif"> 
    </div> 

    <div class="form-group">
      <label for="order_status">Status</label>
      <input type="text" class="form-control" name="quantity" id="order_status" aria-describedby="helpId" placeholder="Enter status" value="@if(isset($food_item)){{$orders->status}} @endif"> 
    </div>
    
    <div class="form-group">
      <label for="order_status">Payment Status</label>
      <input type="text" class="form-control" name="price" id="order_status" aria-describedby="helpId" placeholder="Enter payment status" value="@if(isset($food_item)){{$orders->payment_status}} @endif"> 
    </div>
    
    </select>
  </div>
    </div>  
      <button type="submit" class="btn btn-primary">Submit</button>
      <button type="submit" class="btn btn-primary">Cancel</button>
    </form>
  </div>

  <div class="container">
<table class="table">
  <thead>
    <tr>
      <th>User Id</th>
      <th>Order Date</th>
      <th>Status</th>
      <th>Payment Status</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($orders as $data)
    <tr>    
      <td scope="row">{{$data->payment_status}}</td>
      <td>{{$data->order_date}}</td>
      <td>{{$data->status}}</td>
      <td> {{$data->customers->customers_id}}</td>
      
      <td><a href="{{route('orders.edit', $data->id)}}">Edit</a></td>
      <td>
      <form action="{{route('orders.destroy', $data->id)}}" method="post">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-primary">Delete</button>
      
      </form>
      
      </td>
    </tr>
 @endforeach
  </tbody>
</table>

  </div>
@endsection 