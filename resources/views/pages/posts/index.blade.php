@extends('layouts.app')

@section('title', 'Posts')

@section('content')
<div class="mb-5">
   <h1>Posts</h1>
   @if (count($posts) > 0)
   @foreach ($posts as $post)
   <div class="card my-3">
      <div class="card-body">
         <div class="row">
            <div class="col-md-4 col-sm-4">
               <img style="width: 100%;" src="/storage/cover_images/{{ $post->cover_image }}" alt="">
            </div>
            <div class="col-md-8 col-sm-8">
               <h3>
                  <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
               </h3>
               <small>Written on {{ $post->created_at }} by {{ $post->user->name }}</small>
            </div>
         </div>
      </div>
   </div>
   @endforeach
   {{ $posts->links() }}
   @else
   <p>No posts found</p>
   @endif
</div>
@endsection