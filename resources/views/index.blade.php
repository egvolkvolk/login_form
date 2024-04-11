@extends('layouts.html_layout')

@section('title')
	Main page
@endsection

@section('header')
  Main page
@endsection

@section('links')
  @guest
    <a href="{{ route('login')}}"><button class="btn btn-primary w-100" type="submit">Log in</button></a>
    <a href="{{ route('registration')}}"><button class="btn btn-primary w-100" type="submit">Register</button></a>
  @endguest
  @auth
    <a href="{{ route('dashboard')}}"><button class="btn btn-primary w-100" type="submit">Dashboard</button></a>
  @endauth
@endsection

@section('content')

@endsection
