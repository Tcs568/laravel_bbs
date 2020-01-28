@extends('layouts.app')

@section('title', '投稿編集')

@section('content')
<div>
    <form action="/users/{{$user->id}}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="exampleFormControlTextarea1">名前</label>
            <textarea class="form-control" rows="1" name="name">{{$user->name}}</textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="更新" />
    </form>
</div>
@endsection