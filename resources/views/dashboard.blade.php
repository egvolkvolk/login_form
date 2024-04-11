@extends('layouts.html_layout')

@section('title')
	D
@endsection

@section('header')
	DASHBOARD
@endsection

@section('links')
	<form action="{{ route('logout')}}" method="post">
		@csrf
		<button class="btn btn-primary w-100 py-2" type="submit">Log out</button>	
	</form>
@endsection

@section('content')
<h1>Dashboard</h1>
@endsection