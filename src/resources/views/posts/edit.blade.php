@extends('posts.app')

@section('title', 'Редагувати пост '.$post->title)

@section('content')

<div class="row mt-3">
    <div class="col-lg-6 mx-auto">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form method="POST" action="{{ route('posts.update', $post) }}">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="post-title">Назва</label>
                <input type="text" name="title" value="{{ $post->title }}" class="form-control" id="post-title">
            </div>

            <div class="form-group">
                <label for="post-category_id">Рік видання</label>
                <input type="text" name="category_id" value="{{ $post->category_id }}" class="form-control"
                    id="post-category_id">
            </div>

            <div class="form-group">
                <label for="post-in_stock">В наявності</label>
                <input type="text" name="in_stock" value="{{ $post->in_stock }}" class="form-control"
                    id="post-in_stock">
            </div>

            <div class="form-group">
                <label for="post-description">Опис</label>
                <textarea name="description" class="form-control" id="post-description"
                    rows="3">{{ $post->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="post-price">Ціна</label>
                <input type="text" name="price" value="{{ $post->price }}" class="form-control" id="post-price">
            </div>
            <div class="form-group">
                <label for="post-image">Картинка</label>
                <input type="text" name="image" value="{{ $post->image }}" class="form-control" id="post-image">
            </div>
            <button type="submit" class="btn btn-success">Відредагувати</button>
        </form>
    </div>
</div>
@endsection
