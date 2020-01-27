@extends('layouts.app')

@section('title', '$article -> title')

@section('content')
<div class="card my-3">
    <div class="card-body">
        <h5 class="card-title">{{$article->title}}</h5>
        <small>投稿日:{{($article->created_at)->format('Y/m/d')}}</small><br />
        <small>更新日:{{($article->updated_at)->format('Y/m/d')}}</small>

        <p class="card-text">{{$article->body}}</p>
        @can('edit', $article)
        <a href="/articles/{{$article->id}}/edit" class="btn btn-primary">編集</a>
        <form action="/articles/{{$article->id}}" method="POST">
            @method('DELETE')
            @csrf
            <input type="submit" class="btn btn-danger mt-3" value="削除" />
        </form>
        @endcan
    </div>
</div>
<a href="{{ url('/articles') }}">Back</a>
@endsection