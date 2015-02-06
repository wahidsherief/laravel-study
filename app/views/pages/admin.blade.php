@extends('layouts.default')

@section('content')

{{ HTML::linkAction('LoginController@doLogout', 'Logout', array(), array('class' => 'btn btn-danger pull-right')) }}
<br><br>
<div class='bg-success alert'>
	<strong>Welcome !!</strong> to your Dashboard
</div>

{{ HTML::ul($errors->all()) }}

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
					{{ Form::open(['route' => ['admin.show', $user->id], 'method' => 'get']) }}
					    {{ Form::button('Details') }}
					{{ Form::close() }}
				</td>
				<td>
					{{ Form::open(['route' => ['admin.edit', $user->id], 'method' => 'get']) }}
					    {{ Form::button('Edit') }}
					{{ Form::close() }}
				</td>
				<td>
					{{ Form::open(['route' => ['admin.delete', $user->id], 'method' => 'get']) }}
					    {{ Form::button('Delete') }}
					{{ Form::close() }}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>


<div class="datainsert col-md-6" style='background:#eee'>
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

<div class="showOne">
	<?php if(isset($users)){
		var_dump($users);
	}
	?>
</div>   
@stop