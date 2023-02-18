@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')
<div>
   <h1>Edit Post</h1>
   <form method="POST" action="{{ route('posts.update', $post->id) }}">
      @method('PUT')
      @csrf
      <div class="form-group mt-3 w-50">
         <label for="title" class="mb-2">Title</label>
         <input type="text" id="title" name="title" value="{{ $post->title }}" class="form-control" placeholder="Title">
      </div>
      <div class="form-group mt-3 w-50">
         <label for="body" class="mb-2">Body</label>
         <textarea type="text" id="body" name="body" class="form-control" placeholder="Body Text"
            rows="10">{{ $post->body }}</textarea>
      </div>
      <button type="submit" class="btn btn-primary mt-3">Submit</button>
   </form>
</div>
@endsection