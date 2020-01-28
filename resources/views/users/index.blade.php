@extends('layouts.app')

@section('title', 'ユーザー管理')

@section('content')

@if(count($users) > 0)
@foreach($users as $user)
<div class="card my-3">
    <div class="card-body">
        <h5 class="card-id">{{$user->id}}</h5>
        <h5 class="card-name">{{$user->name}}</h5>
        <form action="/users/{{$user->id}}" method="POST">
            @method('DELETE')
            @csrf
            <input type="submit" class="btn btn-danger mt-3" value="削除" />
        </form>
    </div>
</div>
</a>
@endforeach
@endif
{{ $users->links()}}
@endsection