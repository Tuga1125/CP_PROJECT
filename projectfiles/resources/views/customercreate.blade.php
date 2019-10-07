@extends('layouts.app')

@section('content')

<section class="content-header">
	    <h1>
	        customer add
	        
	    </h1>
	    <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li class="active">Customer</li>
	    </ol>
	</section>

	
	<section class="content">
		<form action="{{ route('customer.store') }}" method="POST">
			@csrf
		

			<div class="form-group">
				<label>name</label>
				<input type="text" name="name" class="form-control">
			</div>

			<div class="form-group">
				<label>username</label>
				<input type="text" name="username" class="form-control">
			</div>

			<div class="form-group">
				<label>contact</label>
				<input type="text" name="contact" class="form-control">
			</div>
			<div class="form-group">
				<label>email</label>
				<input type="text" name="email" class="form-control">
			</div>
			<div class="form-group">
				<label>password</label>
				<input type="password" name="password" class="form-control">
			</div>
			<button class="btn btn-success" type="submit">Save</button>
		</form>		

	</section><!-- /.content -->
@endsection