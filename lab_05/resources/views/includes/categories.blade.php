<div class="btn-group mb-4" role="group" aria-label="Basic outlined example">
    <a href="{{route('posts')}}" class="btn btn-outline-primary">All</a>
    @foreach($categories as $category)
        <a href="{{route('postsByCategory', strtolower($category))}}" class="btn btn-outline-primary">{{$category}}</a>
    @endforeach
</div>
