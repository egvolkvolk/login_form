@extends('layouts.html_layout')

@section('title')
	L
@endsection

@section('header')
	LOGIN
@endsection

@section('links')
	<a href="{{ route('registration')}}"><button class="btn btn-primary w-100" type="submit">Register</button></a>
	<a href="{{ route('index')}}"><button class="btn btn-primary w-100" type="submit">Home</button></a>
@endsection

@section('content')
<div class="form-signin w-25 m-auto">
	<ul class="list-group">
		@foreach ($errors->all() as $elem)
			<li class="list-group-item list-group-item-warning">{{$elem}}</li>
		@endforeach
	</ul>	
	<form action="{{route('login')}}" method="post" novalidate>
		@csrf
	    <h1 class="h3 mb-3 fw-normal">Welcome back!</h1>
	    <div class="form-floating">
	      <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
	      <label for="floatingInput">Email address</label>
	    </div>
	    <div class="form-floating">
	      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
	      <label for="floatingPassword">Password</label>
	    </div>
	    <div class="form-check text-start my-3">
      	   <input class="form-check-input" type="checkbox" name="remember" id="remember">
     	   <label class="form-check-label" for="flexCheckDefault">
        Запомнить меня
      </label>
    </div>
	    <button class="btn btn-primary w-100 py-2" type="submit">Log in</button>
    </form>
</div>

@endsection