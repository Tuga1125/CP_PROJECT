@extends('layouts.app')

@section('content')


  <div class="container">
<table class="table">
  <thead>
    <tr>
      <th>Name</th>
      <th>Username</th>
      <th>Contact</th>
      <th>Email</th>
      <th>Email Verified</th>
      <th>Password</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($customer as $data)
    <tr>      
      <td scope="row">{{$data->name}}</td>
      <td>{{$data->username}}</td>
      <td>{{$data->contact}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->email_verified_at}}</td>
      <td>{{$data->password}}</td>
      
      <td><a href="{{route('customers.edit', $data->id)}}">Edit</a></td>
      <td>
      <form action="{{route('customers.delete', $data->id)}}" method="post">
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