@extends('index.header')
@section('title')Головна сторінка @endsection
@section('content')
@foreach($data as $post)
<div class="p-10 flex-fill ">
    <div  class="mt-5 m-8 me-auto"style=" margin-left: 10%;  width:400px;">
        <div class="" style="max-width: 400px;">
            <div class="row g-0">
                <div class="col-md-4 d-flex justify-content-center">
                    <img src="https://mdbootstrap.com/wp-content/uploads/2020/06/vertical.jpg"
                        style=" width: 200px; height: 200px; " alt="..." class="img-fluid mw-100 m-auto">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text" style="font-weight: 400px;">{{ $post->description }}</p>
                        <div class="btn-group shadow-0" role="group" aria-label="Basic example">
                            <a href="{{ route('posts.show', $post) }}" style="width: 170px;" type="button"
                                class="btn btn-outline-secondary" data-mdb-color="dark">
                                Детальніше
                            </a>
                            <form action="{{route('cartAdd', $post->id)}}" method="post">
                                <button style="width: 170px;" type="submit" class="btn btn-outline-secondary"
                                    data-mdb-color="dark">
                                    В корзину
                                </button>
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
</div>
@endsection
