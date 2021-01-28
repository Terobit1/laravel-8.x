
@extends('posts.app')

@section('title', $post->title)

@section('content')
<div class="card">
    <div class="card-body">
       <h3>{{ $post->title }}</h3>
       <p>{{ $post->category_id }}</p>
       <p>{{ $post->in_stock }}</p>
       <p>{{ $post->description }}</p>
       <p>{{ $post->image }}</p>
       <p><b>{{ $post->price }}$</b></p>
    </div>
</div>
@endsection