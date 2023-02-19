@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="card">
   <div class="card-body text-center">
      <h1>{{ $title }}</h1>
      <p>This is Laravel Application from the "Laravel From Scratch" Youtube series</p>
      <p>
         <a class="btn btn-primary" href="{{ route('login') }}" role="button">Login</a>
         <a class="btn btn-success" href="{{ route('register') }}" role="button">Register</a>
      </p>
   </div>
</div>
@endsection