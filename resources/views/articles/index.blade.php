@extends('master')

@section('content')
    <h1>Articles</h1>

    @foreach($articles as $article)

        <article>
            <h2>{{$article->title}}</h2>
            <div class="content">{{$article->body}}</div>
        </article>

    @endforeach
    @stop
