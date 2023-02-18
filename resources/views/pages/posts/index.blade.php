@extends('layouts.app')

@section('title', 'Posts')

@section('content')
<div class="mb-5">
   <h1>Posts</h1>
   @if (count($posts) > 0)
   @foreach ($posts as $post)
   <div class="card my-3">
      <div class="card-body">
         <h3>
            <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
         </h3>
         <small>Written on {{ $post->created_at }}</small>
      </div>
   </div>
   @endforeach
   {{ $posts->links() }}
   @else
   <p>No posts found</p>
   @endif
</div>
@endsection