@extends('users.app')

@section('title', 'Добавити пост')

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

        <form method="POST" action="{{ route('users.store') }}">
            @csrf
            <div class="form-group">
                <label for="users-name">Ім'я</label>
                <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="users-name">
            </div>

            <div class="form-group">
                <label for="users-email">Пошта</label>
                <input type="text" name="email" value="{{ old('email') }}" class="form-control" id="users-email">
            </div>

            <div class="form-group">
                <label for="users-provider_id">provider_id</label>
                <input type="text" name="provider_id" value="{{ old('provider_id') }}" class="form-control"
                    id="users-provider_id">
            </div>

            <div class="form-group">
                <label for="users-Admin">Admin</label>
                <textarea name="Admin" class="form-control" id="users-Admin" rows="3">{{ old('Admin') }}</textarea>
            </div>

            <div class="form-group">
                <label for="users-password">Пароль</label>
                <input type="text" name="password" value="{{ old('password') }}" class="form-control"
                    id="users-password">
            </div>


            <button type="submit" class="btn btn-success">Добавити користувача</button>
        </form>
    </div>
</div>
@endsection
