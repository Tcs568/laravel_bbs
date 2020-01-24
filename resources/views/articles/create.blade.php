@extends('layouts.app')

@section('title', '新規投稿')

@section('content')
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div>
    <form method="POST" action="/articles">
        <div class="form-group">
            <label for="exampleFormControlInput1">タイトル</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">本文</label>
            <textarea class="form-control" rows="5" name="body"></textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="投稿" />
    </form>
</div>
@endsection