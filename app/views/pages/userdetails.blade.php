@extends('layouts.default')

@section('content')

{{ HTML::ul($errors->all()) }}

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<div class="userdetails">
	<h1>{{ $users->name }}</h1>
	<p>{{ $users->mail }}</p>
	<p>{{ $users->address }}</p>
	<p>{{ $users->phone }}</p>
</div>

@stop