@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div>
   <h3>Login Page</h3>
   <form method="POST" action="{{ route('login.store') }}">
      @csrf
      <div class="form-group mt-3 w-50">
         <label for="email" class="mb-2">Email</label>
         <input type="email" id="email" name="email" class="form-control" placeholder="Email">
      </div>
      <div class="form-group mt-3 w-50">
         <label for="password" class="mb-2">Password</label>
         <input type="password" id="password" name="password" class="form-control" placeholder="Password">
      </div>
      <button type="submit" class="btn btn-primary mt-3">Submit</button>
   </form>
</div>
@endsection