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

<!-- @foreach($errors->all() as $error)
  {{$error }} 
@endforeach -->


    
  <input type="hidden" name="user_id" value="{{Auth::user()->id}}" />
 
    <div class="form-group">
      <label for="order_date">Order date</label>
      <input type="date" class="form-control  @error('order_date') is-invalid @enderror" name="order_date" id="order_date" aria-describedby="helpId" placeholder="Enter order date"if> 
      @error('order_date')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
    </div> 

    <div class="form-group">
      <label for="order_status">Quantity</label>
      <input type="numeric" class="form-control   @error('quantity') is-invalid @enderror" name="quantity" id="order_status" aria-describedby="helpId" placeholder="Enter quantity" > 

          @error('quantity')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror

    </div>
    
    <div class="form-group">
      <label for="order_status"> Status</label>
      <input type="text" class="form-control  @error('status') is-invalid @enderror" name="status" id="order_status" aria-describedby="helpId" placeholder="Enter payment status"> 
      @error('status')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
    </div>
    
    </select>
 
      <button type="submit" class="btn btn-primary">Order</button>
      <button type="submit" class="btn btn-primary">Cancel</button>
    </form>

<table class="table">
  <thead>
    <tr>
      <th>User Id</th>
      <th>Order Date</th>
      <th>Quantity</th>
      <th>Payment Status</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($orders as $data)
    <tr>    
      <td scope="row">{{$data->user_id}}</td>
      <td>{{$data->order_date}}</td>
      
      <td> {{$data->quantity}}</td>
      <td>{{$data->status}}</td>
      
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