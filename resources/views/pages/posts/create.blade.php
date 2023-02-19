@extends('layouts.app')

@section('title', 'Create Post')

@section('content')
<div>
   <h1>Create Post</h1>
   <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
      @csrf
      <div class="form-group mt-3 w-50">
         <label for="title" class="mb-2">Title</label>
         <input type="text" id="title" name="title" class="form-control" placeholder="Title">
      </div>
      <div class="form-group mt-3 w-50">
         <label for="body" class="mb-2">Body</label>
         <textarea type="text" id="body" name="body" class="form-control" placeholder="Body Text" rows="10"></textarea>
      </div>
      <div class="form-group mt-3 w-50">
         <label for="cover_image" class="mb-2">Cover Image</label>
         <input type="file" id="cover_image" name="cover_image" class="form-control">
      </div>
      <button type="submit" class="btn btn-primary mt-3">Submit</button>
   </form>
</div>
@endsection