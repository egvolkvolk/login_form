@extends('layouts.html_layout')

@section('title')
	R
@endsection

@section('header')
	REGISTRATION
@endsection

@section('links')
	<a href="{{ route('login')}}"><button class="btn btn-primary w-100" type="submit">Log in</button></a>
	<a href="{{ route('index')}}"><button class="btn btn-primary w-100" type="submit">Home</button></a>
@endsection

@section('content')
<div class="form-signin w-25 m-auto">
	<ul class="list-group">
		@foreach ($errors->all() as $elem)
			<li class="list-group-item list-group-item-warning">{{$elem}}</li>
		@endforeach
	</ul>	
	<form action="{{route('registration')}}" method="post" novalidate>
		@csrf
	    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
	    <div class="form-floating">
	      <input type="text" class="form-control" id="name" name="name" placeholder="Ivan Ivanov">
	      <label for="floatingInput">Name</label>
	    </div>
	    <div class="form-floating">
	      <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
	      <label for="floatingInput">Email address</label>
	    </div>
	    <div class="form-floating">
	      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
	      <label for="floatingPassword">Password</label>
	    </div>
	    <div class="form-floating">
	      <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm password">
	      <label for="floatingPassword">Confirm password</label>
	    </div>
	    <button class="btn btn-primary w-100 py-2" type="submit">Register</button>
    </form>
</div>

@endsection