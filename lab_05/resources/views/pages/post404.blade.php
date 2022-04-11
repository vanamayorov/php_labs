@extends('layouts.master')
@section('title', "Post $post not found")
@section('content')
    <div>
        <a href="{{route('posts')}}" class="btn btn-outline-primary mb-4">Back</a>
    </div>
    <article>
        <h1 class="text-center">Post {{$post}} not found!</h1>
    </article>
@endsection
