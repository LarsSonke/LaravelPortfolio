@extends('layout')

@section('content')
    <div id="rcorners1">
        <h4>{{$faq->question}}</h4>
        <p>{{$faq->answer}}</p>
    </div>
    <form method="POST" action="{{route('faqs.destroy', $faq['id'])}}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    <a href="{{route('faqs.edit', $faq->id)}}">Edit</a>
    <a href="{{route('faqs.index')}}">Go back</a>
@endsection
