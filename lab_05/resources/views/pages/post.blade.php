@extends('layouts.master')
@section('title', $post['title'])
@section('content')
    <div>
        <a href="{{route('posts')}}" class="btn btn-outline-primary mb-4">Back</a>
    </div>
    <article>
        <h1 class="text-center">{{$post['title']}}</h1>
        <p>
            Description: {{$post['body']}}
        </p>
        <p>
            Category: <a href="{{route('postsByCategory', strtolower($post['category']))}}">
                {{$post['category']}}
            </a>
        </p>

        <p>
            Author: {{$post['author']}}
        </p>
    </article>
@endsection
