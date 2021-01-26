
@extends('index.header')
@section('title')Головна сторінка @endsection

@section('content') 
  
  @foreach($data as $el)
  <div class="p-10 flex-fill" >

  
<div  style="margin: 35px; margin-left: 200px;">
            <div class="" style="max-width: 400px;" >
          <div class="row g-0">
            <div class="col-md-4">
              <img src="https://mdbootstrap.com/wp-content/uploads/2020/06/vertical.jpg" alt="..." class="img-fluid">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">{{ $el->title }}</h5>
                <p class="card-text">{{ $el->description }}</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                
                <div class="btn-group shadow-0" role="group" aria-label="Basic example">
                <button href="/{{ $el->code }}" type="button" class="btn btn-outline-secondary" data-mdb-color="dark">
                  Previous
                </button>
               
                <button href="/{{ $el->code }}" type="button" class="btn btn-outline-secondary" data-mdb-color="dark">
                  Order
                </button>
                
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
 