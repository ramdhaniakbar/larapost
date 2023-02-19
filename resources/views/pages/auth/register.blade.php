@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div>
   <h3>Register Page</h3>
   <form method="POST" action="{{ route('register.store') }}">
      @csrf
      <div class="form-group mt-3 w-50">
         <label for="name" class="mb-2">Name</label>
         <input type="text" id="name" name="name" class="form-control" placeholder="Name">
      </div>
      <div class="form-group mt-3 w-50">
         <label for="email" class="mb-2">Email</label>
         <input type="email" id="email" name="email" class="form-control" placeholder="Email">
      </div>
      <div class="form-group mt-3 w-50">
         <label for="password" class="mb-2">Password</label>
         <input type="password" id="password" name="password" class="form-control" placeholder="Password">
      </div>
      <div class="form-group mt-3 w-50">
         <label for="password_confirmation" class="mb-2">Password Confirmation</label>
         <input type="password" id="password_confirmation" name="password_confirmation" class="form-control"
            placeholder="Password Confirmation">
      </div>
      <button type="submit" class="btn btn-primary mt-3">Submit</button>
   </form>
</div>
@endsection