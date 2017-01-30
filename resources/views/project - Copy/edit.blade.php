@extends('layouts.master')

@section('title', 'Project2')

@section('content')
  <head>
   <meta charset = "utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE-edge">
   <meta name = "viewport" content="width=devide-width, initial-scale=1">
   <link href = "//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel = "stylesheet">
   </head>

   <body>
 <div class = "container">
     <table class = "table table-hover table-bordered">
     <thead>
<h1>Edit Product</h1>

<form action = "/project/{{$project->id}}" method = "post">
   <table>
   <tr>
   <td>Nama Product :</td>
   <td><input type = "text" name = "nama_prd" value="{{ $project->nama_prd}}"></td><br>
   </tr>
   <tr>
   <td>Spek Product :</td>
   <td><textarea name = "spek" rows = "8" cols = "20">{{ $project->spek}}</textarea></td><br>
   </tr>
   <tr>
   <td>Harga Product:</td>
   <td><input type = "text" name = "harga"value="{{ $project->harga}}"></td>
   </tr>
   </table>
  <input type = "submit" name = "submit" value = "Edit">
  {{ csrf_field() }}
  <input type = "hidden" name = "_method" value = "PUT">
</form>

@endsection

