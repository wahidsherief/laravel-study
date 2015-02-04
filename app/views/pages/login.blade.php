@extends('layouts.default')

@section('content')

<div class="login-area col-md-4 col-md-offset-4">

	{{ Form::open(['role' => 'form']) }}
 
    <div class='form-group'>
        {{ Form::label('username', 'Username') }}
        {{ Form::text('username', null, ['placeholder' => 'Username', 'class' => 'form-control']) }}
    </div>
 
    <div class='form-group'>
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control']) }}
    </div>
 
    <div class='form-group'>
        {{ Form::submit('Login', ['class' => 'btn btn-primary']) }}
    </div>
 
    {{ Form::close() }}

	@if ($errors->has())
		<div class='alert alert-danger alert-dismissable' style='background:#DA3838; color:white'>
			<button class='close' type='button' data-dismiss="alert" aria-hidden="true">
				&times;
			</button>
        @foreach ($errors->all() as $error)
            {{ $error }}
        @endforeach
        </div>
    @endif

</div>

@stop