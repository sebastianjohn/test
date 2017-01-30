@extends('layouts.master')

@section('title','content')

@section('content')
<h1>Selamat Datang Di Single Ini</h1>
<h2>{{$blog->title}}</h2>
<hr>
<p>
    {{$blog->description}}
</p>
@endsection

