@extends('layouts.app')

@section('title', '$article -> title')

@section('content')
<div class="card my-3">
    <div class="card-body">
        <h5 class="card-id">{{$user->id}}</h5>
        <h5 class="card-name">{{$user->name}}</h5>
        <a href="/users/{{$user->id}}/edit" class="btn btn-primary">編集</a>
        <form action="/users/{{$user->id}}" method="POST">
            @method('DELETE')
            @csrf
            <input type="submit" class="btn btn-danger mt-3" value="削除" />
        </form>
    </div>
</div>
@endsection