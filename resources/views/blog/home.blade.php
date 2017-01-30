@extends('layouts.master')

@section('title','Blogerzzzz')


@section('content')
<h1>Selamat datang di Blog Kami</h1>
<p>3.5 Levaral</p>
<hr>

@foreach($blogs as $blog)
  <li>
      <a href = "/blog/{{$blog->id}}">{{$blog->title}}</a>
      <form action = "/blog/{{$blog->id}}" method = "post">

  <input type = "submit" name = "submit" value = "delete">
  {{ csrf_field() }}
  <input type = "hidden" name = "_method" value = "DELETE"> 
  </form>
  </li>
@endforeach  
@endsection