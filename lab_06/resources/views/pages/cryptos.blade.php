@extends('layouts.master')
@section('title', 'Cryptocurrencies')
@section('content')
    @isset($category)
        <h1 class="mb-2">{{ucfirst($category->name)}} Category</h1>
    @endisset

    @isset($tag)
        <h1 class="mb-2"><span class="badge bg-success">{{ucfirst($tag->name)}}</span> Tag</h1>
    @endisset
<ul class="d-flex flex-wrap p-0" style="margin: 0 -15px">
    @forelse ($cryptos as $crypto)
    <li class="card mb-4" style="max-width: calc(33.333% - 20px); width: 100%; padding: 8px; margin: 0 8px 0;">
        <img class="card-img-top" src="{{$crypto['image']}}" alt="img">
        <div class="card-header">
            <a href="{{route('category', [$crypto->category['id']])}}">{{ucfirst($crypto->category['name'])}} Category</a>
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ucfirst($crypto['name'])}}</h5>
            <a href="{{route('getCryptoById', [$crypto['id']])}}" class="btn btn-primary">Read more</a>
        </div>
    </li>
    @empty
        <p>No cryptos...</p>
    @endforelse
</ul>
@endsection
