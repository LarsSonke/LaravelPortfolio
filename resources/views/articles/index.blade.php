@extends('layout')

@section('content')
    @foreach($articles as $articleIndex => $article)
        <div id="rcorners1">
            <h4>{{$articleIndex + 1}}. {{$article->title}}</h4>
            <p>{{$article->body}}</p>
            <a href="{{route('articles.show', $article->id)}}">Show article</a>
        </div>
    @endforeach
@endsection
