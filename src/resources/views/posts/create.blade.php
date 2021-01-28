@extends('posts.app')

@section('title', 'Добавить пост')

@section('content')

<div class="row">
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

    <form method="POST" action="{{ route('posts.store') }}">
     @csrf
     <div class="form-group">
            <label for="post-title">Назва</label>
            <input type="text" name="title" 
                   value="{{ old('title') }}" class="form-control" id="post-title">
        </div>

        <div class="form-group">
            <label for="post-category_id">Рік видання</label>
            <input type="text" name="category_id" 
                   value="{{ old('category_id') }}" class="form-control" id="post-category_id">
        </div>

        <div class="form-group">
            <label for="post-in_stock">В наявності</label>
            <input type="text" name="in_stock" 
                   value="{{ old('in_stock') }}" class="form-control" id="post-in_stock">
        </div>

        <div class="form-group">
            <label for="post-description">Опис</label>
            <textarea name="description" class="form-control" id="post-description" rows="3">{{ old('price') }}</textarea>
        </div>

        <div class="form-group">
            <label for="post-price">Ціна</label>
            <input type="text" name="price" 
                   value="{{ old('price') }}" class="form-control" id="post-price">
        </div>
        <div class="form-group">
            <label for="post-image">Картинка</label>
            <input type="text" name="image" 
                   value="{{ old('image') }}" class="form-control" id="post-image">
        </div>
        
        <button type="submit" class="btn btn-success">Добавить пост</button>
    </form>
</div>
</div>
@endsection