@extends('layouts.master')
@section('title', 'Add post page')
@section('content')
    @isset($status)
        <div class="alert alert-success" role="alert">
            Post was added successfully!
        </div>
    @endisset
    <form action="{{route("createPost")}}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" class="form-control" placeholder="Enter title" name="title" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Author</label>
            <input type="text" class="form-control" placeholder="Enter author" name="author" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Category</label>
            <select class="form-select" aria-label="Default select example" name="category" required>
                <option selected>Select post category</option>
                @foreach($categories as $category)
                    <option value="{{$category}}">{{$category}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Post body</label>
            <textarea class="form-control" rows="3" name="body" required></textarea>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Create new post</button>
        </div>
    </form>

@endsection
