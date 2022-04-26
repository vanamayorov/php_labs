@extends('layouts.master')
@section('title', 'Categories')
@section('content')
    <ul class="d-flex p-0 justify-content-between justify-content-center">
            @forelse ($categories as $category)
        <li class="card">
            <div class="card-body text-center">
                <h5 class="card-title mb-4">{{ucfirst($category['name'])}}</h5>
                <a href="{{route('category', [$category->id])}}" class="btn btn-primary">View categories cryptos</a>
            </div>
        </li>
        @empty
            <p>No categories...</p>
        @endforelse
    </ul>

@endsection
