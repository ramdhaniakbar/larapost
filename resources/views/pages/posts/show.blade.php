@extends('layouts.app')

@section('title', 'Detail Post')

@section('content')
<div>
   <a href="{{ route('posts.index') }}" class="btn btn-light border">Go back</a>
   <h1 class="mt-3">{{ $post->title }}</h1>
   <div>
      {{ $post->body }}
   </div>
   <hr />
   <small>Written on {{ $post->created_at }}</small>
   <hr>
   @auth
   @if (Auth::user()->id === $post->user_id)
   <div class="d-flex">
      <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-light border me-2">Edit</a>
      <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
         @csrf
         @method('DELETE')
         <button type="submit" class="btn btn-danger">Delete</button>
      </form>
   </div>
   @endif
   @endauth
</div>
@endsection