@extends('layouts.master')

@section('title','Edit')

@section('content')
<h1>Edit Datang Di Single Ini</h1>
<form action = "/blog/{{$blog->id}}" method = "post">
 <input type = "text" name = "title" value = "{{$blog->title}}"><br>
 <textarea name = "description" rows = "8" cols = "40">{{$blog->description}}</textarea><br>
   
  <input type = "submit" name = "submit" value = "submit">
  {{ csrf_field() }}
  <input type = "hidden" name = "_method" value = "PUT"> 
</form>
@endsection

