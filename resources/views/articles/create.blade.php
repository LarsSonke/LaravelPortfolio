@extends('layout')

@section('content')
    <form method="POST" action="{{route('articles.store')}}">
        @csrf
        <p>Title</p>
        <input type="text" name="title" autocomplete="off" autofocus="true" placeholder="Please fill in the title (required)" required/>
        <p>Slug</p>
        <input type="text" name="slug" autocomplete="off" autofocus="true" placeholder="Please fill in the slug (required)" required/>
        <p>Body</p>
        <textarea type="text" name="body" autocomplete="off" autofocus="true" placeholder="Please fill in the body (optional)"/></textarea>
        <button type="submit">Submit</button>
    </form>
    <style>input { 
  font-size: 14px; 
  font-size: 0.75rem; 
  padding: 10px;  
  border: 1px solid #d7d8d8; 
  -moz-transition: all 0.25s ease-in-out; 
  transition: all 0.25s ease-in-out; 
}

input[type=text] {
   width: 100%; 
   border-radius: 10px;
}
input[type=text]:hover, textarea:hover {
   border: 1px solid #fff; 
   border-radius: 10px;
}
button[type=submit] {
    color: #fff !important;
    padding: 10px 20px;
    background: #39ac31;
    display: inline-block;
    border-radius: 40px;
    text-decoration: none;
    width: auto;
    cursor: pointer;
}
textarea[type=text] {
   width: 100%; 
   border-radius: 10px;
}
textarea[type=text]:hover, textarea:hover {
   border: 1px solid #fff; 
   border-radius: 10px;
}
p {
  margin-bottom: -20px;
  text-align: left;
}
</style>
@endsection
