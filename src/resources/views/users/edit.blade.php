@extends('users.app')

@section('title', 'Редагувати пост'.$user->title)

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
        <form method="POST" action="{{ route('users.update', $user) }}">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="user-name">Ім'я</label>
                <input type="text" name="name" value="{{ $user->name }}" class="form-control" id="user-name">
            </div>

            <div class="form-group">
                <label for="users-email">Пошта</label>
                <input type="text" name="email" value="{{ $user->email }}" class="form-control" id="user-email">
            </div>

            <div class="form-group">
                <label for="user-provider_id">provider_id</label>
                <input type="text" name="provider_id" value="{{ $user->provider_id }}" class="form-control"
                    id="user-provider_id">
            </div>

            <div class="form-group">
                <label for="user-Admin">Admin</label>
                <textarea name="Admin" class="form-control" id="user-Admin" rows="3">{{ $user->Admin }}</textarea>
            </div>

            <div class="form-group">
                <label for="user-password">Пароль</label>
                <input type="text" name="password" value="{{ $user->password }}" class="form-control"
                    id="user-password">
            </div>

            <button type="submit" class="btn btn-success">Відредагувати</button>
        </form>
    </div>
</div>
@endsection
