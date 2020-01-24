@extends('layouts.app')

@section('title', '投稿編集')

@section('content')
<div>
    <form action="/articles/{{$article->id}}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">タイトル</label>
            <input type="text" class="form-control" name="title" value="{{$article->title}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">本文</label>
            <textarea class="form-control" rows="5" name="body">{{$article->body}}</textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="更新" />
    </form>
    <form action="/articles/{{$article->id}}" method="POST">
        @method('DELETE')
        @csrf
        <input type="submit" class="btn btn-danger mt-3" value="削除" />
    </form>
</div>
@endsection