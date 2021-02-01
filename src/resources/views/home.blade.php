
@extends('index.header')
@section('title')Головна сторінка @endsection

@section('content') 
  
  @foreach($data as $post)
  <div class="p-10 flex-fill " >

  
      <div  style="margin: 35px; margin-left: 10%; margin-right: auto; width:400px;" >
            <div class="" style="max-width: 400px;" >
          <div class="row g-0">
            <div class="col-md-4 d-flex justify-content-center">
              <img src="https://mdbootstrap.com/wp-content/uploads/2020/06/vertical.jpg" style=" width: 200px; height: 200px; margin:auto;" alt="..." class="img-fluid mw-100">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text"style="font-weight: 400px;">{{ $post->description }}</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                
                <div class="btn-group shadow-0" role="group" aria-label="Basic example">
                <a href="{{ route('posts.show', $post) }}" style="width: 170px;" type="button" class="btn btn-outline-secondary" data-mdb-color="dark">
                Детальніше
              </a>
               <form action="{{route('cartAdd', $post->id)}}" method="post">
               <button href="" style="width: 170px;" type="submit" class="btn btn-outline-secondary" data-mdb-color="dark">
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
      <!-- <div class="card mb-3" style="max-width: 300px;">
  <div class="row no-gutters">
    <div class="col-md-4 d-flex justify-content-center">
    <img src="https://mdbootstrap.com/wp-content/uploads/2020/06/vertical.jpg"  s alt="..." class="img-fluid mw-100">

    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">It's a broader card with text below as a natural lead-in to extra content. This content is a little longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div> -->
    @endforeach
   


  </div>
  </div>
  @endsection
 