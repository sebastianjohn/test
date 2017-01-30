@extends('layouts.master')

@section('title', 'Project2')

@section('content')
  <head>
   <meta charset = "utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE-edge">
   <meta name = "viewport" content="width=devide-width, initial-scale=1">
   <link href = "//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel = "stylesheet">
   <link rel="stylesheet" type="text/css" href="css/css.css">
   </head>

   <body>
 <div class = "container">
     <h4>Pelanggan Table</h4>



<h1>Upload Product</h1>

<form action = "/project" method = "post">
   <table>
   <tr>
   <td><h5>Nama Product :</td>
   <td><input type = "text" name = "nama_prd" value = "{{ old('nama_prd') }}">
   
        @if($errors->has('nama_prd'))  
   {{$errors->first('nama_prd')}}
   @endif</td>
   </tr>
   <tr>
   <td><h5>Spek Product :</td>
   <td><textarea name = "spek" rows = "8" cols = "20">{{ old('spek') }}</textarea>
       @if($errors->has('spek'))  
    {{$errors->first('spek')}}
   @endif</td>
   </tr>

   <tr>
   <td><h5>Harga Product:</td>
   <td><input type = "text" value = "{{ old('harga') }}"name = "harga">
       @if($errors->has('harga'))  
    {{$errors->first('harga')}}
   @endif</td>
   </tr>
   </table>

  <input type = "submit" name = "submit" value = "Create">
  {{ csrf_field() }}
</form>

@endsection

