@extends('users.app')

@section('title', 'Всі пости')

@section('content')

<a style="margin-top: 35px;
          margin-left: 0px;" href="{{ route('users.create') }}" class="btn btn-success">Створити користувача</a>
@if(session()->get('success'))
<div class="alert alert-success mt-3">
    {{ session()->get('success') }}
</div>
@endif

<table class="table table-striped mt-3">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">provider_id</th>
            <th scope="col">Admin</th>
            <th scope="col">password</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->name}}</td>
            <td>{{ $user->email}}</td>
            <td>{{ $user->provider_id }}</td>
            <td>{{ $user->Admin}}</td>
            <td>{{ $user->password }}</td>
            <td class="row">
                <a href="{{ route('users.show', $user) }} " style="
                  height: 37px;
                  margin-top: 6px;
                  margin-right: 3px; " class="btn ">
                    <i class="fa fa-eye"></i>
                </a>
                <a style="padding-right: 13px;
                  padding-left: 13px;
                  margin-top: 6px;
                  margin-right: 3px; 
                  height: 37px;" href="{{ route('users.edit', $user) }}" class="btn ">
                    <i class="fa fa-pencil"></i>
                </a>
                <div></div>
                <form class="" method="POST" action="{{ route('users.destroy', $user) }}" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    @csrf
                    @method('DELETE')

                    <a href="#myModal1" data-toggle="modal" style="padding-right: 13.5px;
                      padding-left: 13.5px;
                      margin-top: 6px;
                      margin-right: 3px; " class="btn ">
                        <i class="fa fa-trash"></i>
                    </a>
                    <!-- Modal -->
                    <div id="myModal1" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">

                                    <h4 class="modal-title">Видалення</h4>
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">×</button>
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
