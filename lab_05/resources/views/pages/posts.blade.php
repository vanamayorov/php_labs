@extends('layouts.master')
@section('title', 'All posts')
@section('content')
    @include('includes.categories')
    @forelse ($all_posts as $post)
        <div class="card mb-4">
            <div class="card-header">
                <a href="{{route('postsByCategory', strtolower($post["category"]))}}">{{$post["category"]}} Category</a>
            </div>
            <div class="card-body">
                <h5 class="card-title">{{$post["title"]}}</h5>
                <p class="card-text">{{$post["body"]}}</p>
                <a href="{{route("getPost", $post["id"])}}" class="btn btn-primary">Read more</a>
            </div>
        </div>
    @empty
        <p>No posts...</p>
    @endforelse
@endsection
