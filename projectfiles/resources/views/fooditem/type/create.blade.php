@extends('layouts.app')

@section('content')

  <div class="container">
  @if(isset($food_item_type))
  <form action="{{route('fooditemtype.update', $food_item_type->id)}}" method="POST">
      @csrf
      @method('PUT')
@else 
     
      <form action="{{route('fooditemtype.store')}}" method="POST">
      @csrf
    @endif
    <div class="form-group">
      <label for="fooditemtype">Food Item Type</label>
      <input type="text" class="form-control" name="name" id="fooditemtype" aria-describedby="helpId" placeholder="Enter Food item type" value="@if(isset($food_item_type)){{$food_item_type->name}} @endif"> 
    </div>
    
      <button type="submit" class="btn btn-primary">Submit</button>
      <button type="submit" class="btn btn-primary">Cancel</button>
    </form>
  </div>

  <div class="container">
<table class="table">
  <thead>
    <tr>
      <th>Name</th>
      <th>Action</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  @foreach($fooditemtypes as $data)
    <tr>
      <td scope="row">{{$data->name}}</td>
      <td><a href="{{route('fooditemtype.edit', $data->id)}}">Edit</a></td>
      <td>
      <form action="{{route('fooditemtype.destroy', $data->id)}}" method="post">
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