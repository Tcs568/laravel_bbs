@extends('layouts.app')

@section('title', '$article -> title')

@section('content')
<div class="card my-3">
    <div class="card-body">
        <h5 class="card-title">{{$article->title}}</h5>
        <h5 class="card-id">{{$article->user_id}}</h5>
        <small>投稿日:{{($article->created_at)->format('Y/m/d')}}</small><br />
        <small>更新日:{{($article->updated_at)->format('Y/m/d')}}</small>
        <a href="/articles/{{$article->id}}/edit">編集</a>
        <a href="/articles/{{$article->id}}/edit">削除</a>
        <p class="card-text">{{$article->body}}</p>
    </div>
</div>
<a href="{{ url('/articles') }}">Back</a>
@endsection