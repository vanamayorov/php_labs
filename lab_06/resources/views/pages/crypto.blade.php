@extends('layouts.master')
@section('title', ucfirst($crypto->name) . " page")
@section('content')
    <div>
        <a href="{{route('cryptos')}}" class="btn btn-outline-primary mb-4">Back</a>
    </div>
    <article>
        <h1 class="text-center">{{ucfirst($crypto->name)}}</h1>
        <p>
            Description: {{$crypto->description}}
        </p>
        <p>
            Category: <a href="{{route('category', [$crypto->category->id])}}">{{$crypto->category->name}}</a>
        </p>
        <ul class="p-0 d-flex" style="list-style: none">
            Tags:
            @forelse($crypto->tags as $tag)
                <li class="mx-2">
                    <a href="{{route('getCryptoByTag', [$tag->id])}}"><span class=" badge rounded-pill px-3 bg-success">{{$tag->name}}</span></a>
                </li>
            @empty
                <li>No tags...</li>
            @endforelse
        </ul>
    </article>
@endsection
