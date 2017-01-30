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


<h1>Beli Product</h1>

<form action = "/project/by" method = "post">
   <table>
   <tr>
   <td>id product:</td>
   <td><input type = "text" name = "id_prd" value = "{{ $project->id }}">
   </td>
   <tr>
   <td>Nama Product :</td>
   <td><input type = "text" name = "nama_prd" value = "{{ $project->nama_prd }}">
   @if($errors->has('nama_prd'))  
   {{$errors->first('nama_prd')}}
   @endif</td>
   </tr>
   <tr>
   
   <td>nama pelanggan :</td>
   <td><input type = "text" name = "nama" value = ""></td>
   </tr>
   <tr>
   <td>Alamat Pelanggan:</td>
   <td><input type = "text" value = "" name = "alamat"></td>
   </tr>
   <tr>
   <td>no telephone pelanggan:</td>
   <td><input type = "text" value = ""name = "no_hp"></td>
   </tr>
   <tr>

  <td><input type = "submit" name = "submit" value = "OK">
  {{ csrf_field() }}</td>
  </tr>
  </table>
</form>


@endsection

