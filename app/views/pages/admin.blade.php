@extends('layouts.default')

@section('content')

{{ HTML::linkAction('LoginController@doLogout', 'Logout', array(), array('class' => 'btn btn-danger pull-right')) }}
<br><br>
<div class='bg-success alert'>
	<strong>Welcome !!</strong> to your Dashboard
</div>

{{ HTML::ul($errors->all()) }}

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<div class="datalist table-responsive">
	<table class='col-md-12 table table-bordered'>
		<thead>
			<th>#</th>
			<th>Username</th>
			<th>Email</th>
			<th>Address</th>
			<th>Phone</th>
		</thead>
		<tbody>
			@foreach($inputs as $key => $user)
			<tr>
				<td>{{ ++$key }}</td>
				<td>{{ $user->name }}</td>
				<td>{{ $user->email }}</td>
				<td>{{ $user->address }}</td>
				<td>{{ $user->phone }}</td>
				<td>
					<a class="btn btn-default" href="{{ URL::to('user/' . $user->id) }}">Details</a>
				</td>
				<td>
					<a class="btn btn-primary" href="{{ URL::to('edit/' . $user->id) }}">Edit</a>
				</td>
				<td>
					<a class="btn btn-danger" href="{{ URL::to('delete/' . $user->id) }}">Delete</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>


<div class="datainsert col-md-6" style="background:#344860; color:white">
	{{ Form::open(array('url' => 'admin/create')) }}
		<div class="form-group">
		    <label for="username">Username</label>
		    <input type="text" class="form-control" id="username" name='name' placeholder="Enter Username">
	 	</div>
	  	<div class="form-group">
	    	<label for="exampleInputEmail1">Email</label>
	    	<input type="email" class="form-control" id="exampleInputEmail1"  name='email' placeholder="Enter email">
	  	</div>
	  	<div class="form-group">
	    	<label for="exampleInputEmail1">Address</label>
	    	<textarea class="form-control" rows="3" name='address'></textarea>
	  	</div>
	  	<div class="form-group">
	    	<label for="exampleInputEmail1">Phone</label>
	    	<input type="tel" class="form-control" id="exampleInputEmail1"  name='phone' placeholder="Enter Phone">
	  	</div>
	  	<button type="submit" class="btn btn-primary">Submit</button>
	{{ Form::close() }}
</div>     

@stop