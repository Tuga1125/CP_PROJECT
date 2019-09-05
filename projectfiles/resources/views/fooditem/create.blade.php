@extends('layouts.app')

@section('content')

  <div class="container">
  @if(isset($fooditem))
  <form action="{{route('fooditem.update', $fooditem->id)}}" method="POST">
      @csrf
      @method('PUT')
@else 
     
      <form action="{{route('fooditem.store')}}" method="POST">
      @csrf
    @endif
    <div class="form-group">
      <label for="food_name">Name</label>
      <input type="text" class="form-control" name="name" id="food_item" aria-describedby="helpId" placeholder="Enter name of food" value="@if(isset($fooditem)){{$fooditem->name}} @endif"> 
    </div>
    <!-- <div class="form-group">
      <label for="food_name">Type</label>
      <input type="text" class="form-control" name="type" id="food_item" aria-describedby="helpId" placeholder="Enter type of food" value="@if(isset($fooditem)){{$fooditem->type}} @endif"> 
    </div> -->
    <div class="form-group">
      <label for="food_description">Description</label>
     
        <textarea class="form-control" name="description" placeholder="Enter short description about the food"id="" rows="3">@if(isset($fooditem)){{$fooditem->description}} @endif</textarea>
     
    </div>
   
    <!-- <div class="form-group">
      <label for="photo_url">Photo URL</label><br />
      <input type="file" name="photourl" id="food_item" aria-describedby="helpId" placeholder="Enter url of photo" value="@if(isset($fooditem)){{$fooditem->name}} @endif"> 
    </div> -->
    <div class="form-group">
      <label for="food_price">Price</label>
      <input type="text" class="form-control" name="price" id="food_price" aria-describedby="helpId" placeholder="Enter price" value="@if(isset($fooditem)){{$fooditem->price}} @endif"> 
    </div>
    
    <div class="form-group">
      <label for="food_item_category">Food item type </label>
  
    <select class="form-control" name="fooditemtype_id" id="">
    @foreach($fooditemtypes as $data)
    <option value="{{$data->id}}">{{$data->name}}</option>
    @endforeach
    </select>
  </div>
  
    
    
      <button type="submit" class="btn btn-primary">Submit</button>
      <button type="reset" class="btn btn-primary">Cancel</button>
    </form>
  </div>

  <div class="container">
<table class="table">
  <thead>
    <tr>
      <th>Name</th>
      <th>Description</th>
      <th>Quantity</th>
      <th>Price</th>
      <th>Item Category</th>
      <th>Action</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  @foreach($fooditems as $data)
    <tr>
      <td scope="row">{{$data->name}}</td>
      <td>{{$data->description}}</td>
      <!-- <td>{{$data->quantity}}</td> -->
      <td>{{$data->price}}</td>
      <td>{{$data->food_item_types->name}}</td>

      <td><a href="{{route('fooditem.edit', $data->id)}}" class="btn btn-info">Edit</a></td>
      <td>
      <form action="{{route('fooditem.destroy', $data->id)}}" method="post">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger">Delete</button>
      
      </form>
      
      </td>
    </tr>
 @endforeach
  </tbody>
</table>

  </div>
@endsection