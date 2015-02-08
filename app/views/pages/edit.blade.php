@extends('layouts.default')

@section('content')

{{ HTML::ul($errors->all()) }}

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<div class="dataupdate col-md-6" style="background:#344860; color:white">
	{{ Form::open(array('route' => array('user.update', $users->id), 'method' => 'PUT')) }}
		<div class="form-group">
		    <label for="username">Username</label>
		    <input type="text" value="{{ $users->name }}" class="form-control" id="username" name='name' placeholder="Enter Username">
	 	</div>
	  	<div class="form-group">
	    	<label for="exampleInputEmail1">Email</label>
	    	<input type="email" value="{{ $users->email }}" class="form-control" id="exampleInputEmail1"  name='email' placeholder="Enter email">
	  	</div>
	  	<div class="form-group">
	    	<label for="exampleInputEmail1">Address</label>
	    	<textarea class="form-control" rows="3" name='address'>{{ $users->address }}</textarea>
	  	</div>
	  	<div class="form-group">
	    	<label for="exampleInputEmail1">Phone</label>
	    	<input type="tel" value="{{ $users->phone }}" class="form-control" id="exampleInputEmail1"  name='phone' placeholder="Enter Phone">
	  	</div>
	  	<button type="submit" class="btn btn-primary">Submit</button>
	{{ Form::close() }}
</div> 

@stop