
@extends('users.app')

@section('title', $user->name)

@section('content')
<div class="card">
    <div class="card-body">
       <h3>{{ $user->name }}</h3>
       <p>{{ $user->email }}</p>
       <p>{{ $user->provider_id }}</p>
       <p>{{ $user->Admin }}</p>
       <p><b>{{ $user->password }}</b></p>
    </div>
</div>
@endsection