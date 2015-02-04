@extends('layouts.default')

@section('content')

{{ HTML::linkAction('LoginController@doLogout', 'Logout', array(), array('class' => 'btn btn-danger pull-right')) }}
<br><br>
<div class='bg-success alert'>
    <p>laravel now in github</p>
	<strong>Welcome !!</strong> to your Dashboard
</div>


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
			<td></td>
		</tbody>
	</table>
</div>


<div class="datainsert col-md-6" style='background:#eee'>
	<form>
		<div class="form-group">
		    <label for="username">Username</label>
		    <input type="text" class="form-control" id="username" placeholder="Enter Username">
	 	</div>
	  	<div class="form-group">
	    	<label for="exampleInputEmail1">Email</label>
	    	<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
	  	</div>
	  	<div class="form-group">
	    	<label for="exampleInputEmail1">Address</label>
	    	<textarea class="form-control" rows="3"></textarea>
	  	</div>
	  	<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>        
@stop