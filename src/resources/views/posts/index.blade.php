@extends('posts.app')

@section('title', 'Все посты')

@section('content')

<a style="margin-top: 35px;
          margin-left: 0px;"
   href="{{ route('posts.create') }}" class="btn btn-success">Создать пост</a>



 @if(session()->get('success'))
    <div class="alert alert-success mt-3">
      {{ session()->get('success') }}  
    </div>
@endif

<table class="table table-striped mt-3">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Рік видавництва</th>
      <th scope="col">Название</th>
      <th scope="col">Цена</th>
      <th scope="col">Наявність</th>
      <th scope="col">Описание</th>
      <th scope="col">Картинка</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
   @foreach($posts as $post)
    <tr>
      <th scope="row">{{ $post->id }}</th>
      <td>{{ $post->category_id}}</td>
      <td >{{ $post->title }}</td>
      <td>{{ $post->price}}</td>
      <td>{{ $post->in_stock }}</td>
      <td class="text-break" >{{ $post->description }}</td>
      <td>{{ $post->image }}</td>
      <td class="row">
        <a href="{{ route('posts.show', $post) }}" style="
            height: 37px;
            margin-top: 6px;
            margin-right: 3px; "class="btn ">
          <i class="fa fa-eye"></i>
        </a>
        <a style="padding-right: 13px;
                  padding-left: 13px;
                  margin-top: 6px;
                  margin-right: 3px; 
                  height: 37px;" 
           href="{{ route('posts.edit', $post) }}"
           class="btn ">
        <i class="fa fa-pencil" ></i>
        </a>
        <div></div>
      <form class=""   method="POST" action="{{ route('posts.destroy', $post) }}" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
         @csrf
         @method('DELETE')
            <button type="submit" class="btn " style="
              margin-left: 0px;
              margin-top: 6px;
              padding-left: 13.5px;
              padding-right: 13.5px;">
              <i class="fa fa-trash"></i>
            </button>
            <a href="#myModal1" data-toggle="modal"  style="
                  padding-right: 13.5px;
                  padding-left: 13.5px;
                  margin-top: 6px;
                  margin-right: 3px;" 
                  class="btn ">
             <i class="fa fa-trash"></i>
            </a>
            <!-- Modal -->
            <div id="myModal1" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            
                            <h4 class="modal-title">Видалення</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            Ви точно хочете видалити?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Закрити</button>
                            <button type="submit" class="btn btn-primary">Видалити</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
      
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
<script>
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
  const myModald = new mdb.Modal(document.getElementById('myModal'), options)
  const myModal = document.getElementById('myModal')
  const modal = new mdb.Modal(myModalEl)
modal.show()
</script>
@endsection