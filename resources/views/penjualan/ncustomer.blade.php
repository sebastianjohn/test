@extends('layouts.master')

@section('title', 'Pembelian')

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
  


<h3>Beli Product</h3>
<hr>
<form action = "/nby" method = "post">
   <tr>
         <td>Nama</td>
         <td><input type = "text" name = "nama" id = "nama"></td>
   </tr>
   <tr>
         <td>Alamat</td>
        <td><input type = "text" name = "alamat" id = "alamat"></td>
  </tr>
   <tr>
  <td><input type = "submit" name = "submit" value = "OK" class = "btn btn-primary">
      <input type = "reset" name = "reset" value = "reset" class = "btn btn-primary"></td>
  </tr>
  {{ csrf_field() }}
  </tr>
  </table>
</form>


@endsection