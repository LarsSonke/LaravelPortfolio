@extends('layout')

@section('content')
    <div id="rcorners1">
        <h4>{{$article->title}}</h4>
        <p>{{$article->body}}</p>
    </div>
    <form method="POST" action="{{route('articles.destroy', $article['id'])}}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete article</button>
    </form>
    <a href="{{route('articles.edit', $article->id)}}">Edit article</a>
    <a href="{{route('articles.index')}}">Go back</a>
@endsection
