@extends('layouts.master')

@section('title','Edit')

@section('content')
<h1>Create</h1>
<form action = "/blog" method = "post">
 <input type = "text" name = "title" value = "{{ old ('title') }}"><br>
 @if($errors->has('title'))
 <p>{{$errors->first('title')}}</p>
 @endif

 <textarea name = "description" rows = "8" cols = "40">{{ old ('description') }}</textarea><br>
 @if($errors->has('description'))
 <p>{{$errors->first('description')}}</p>
 @endif
   
  <input type = "submit" name = "submit" value = "create">
  {{ csrf_field() }}
</form>
@endsection

