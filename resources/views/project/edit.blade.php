@extends('layouts.master')

@section('title', 'edit')

@section('content')
  <head>
   <meta charset = "utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE-edge">
   <meta name = "viewport" content="width=devide-width, initial-scale=1">
   <link href = "//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel = "stylesheet">
   <link rel="stylesheet" type="text/css" href="/css/css.css">
   </head>

   <body>
 <div class = "container">
     <table class = "table table-hover table-bordered">
     <thead>
<h3>Edit Product</h3>

<form action = "/project/{{$project->id}}" method = "post" enctype = "multipart/form-data" class="form-horizontal">
   <table class = "table">
   <tr>
   <td><h5>Nama Product :</td>
   <td><input type = "text" name = "nama_prd" value="{{ $project->nama_prd}}"></td><br>
   </tr>
   <tr>
   <td><h5>Spek Product :</td>
   <td><textarea name = "spek" rows = "3" cols = "50">{{ $project->spek}}</textarea></td><br>
   </tr>
   <tr>
   <td><h5>Harga Product:</td>
   <td><input type = "text" name = "harga"value="{{ $project->harga}}"></td>
   </tr>
   <td><h5>change Uploaded Image : </td>
   <td><input type = "file"  id = "gambar" name = "gambar"  value = "{{$project->gambar}}"><img src = "{{ url('uploadgambar') }}/{{ $project->gambar }}" width = "200" height = "100">
       <input type = "hidden" name = "MAX_FILE_SIZE" value = "1000000"></td>
   </table>
  <input type = "submit" name = "submit" value = "Edit">
  {{ csrf_field() }}
  <input type = "hidden" name = "_method" value = "PUT">
</form>

@endsection

