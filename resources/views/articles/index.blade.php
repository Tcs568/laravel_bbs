@extends('layouts.app')

@section('title', '投稿記事一覧')

@section('content')

<a href="/articles/create" class="btn btn-primary">新規投稿</a>
@if(count($articles) > 0)
@foreach($articles as $article)
<a href="/articles/{{$article->id}}">
    <div class="card my-3">
        <div class="card-body">
            <h5 class="card-title">{{$article->title}}</h5>
            <h5 class="card-id">{{$article->user_id}}</h5>
            <small>投稿日:{{($article->created_at)->format('Y/m/d')}}</small><br />
            <small>更新日:{{($article->updated_at)->format('Y/m/d')}}</small>
            <p class="card-text">{{$article->body}}</p>
        </div>
    </div>
</a>
@endforeach
@endif
{{ $articles->links()}}
@endsection