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
<h3>Edit Product</h3>

<form action = "/products/{{ $product->id_product }}" method = "post" enctype = "multipart/form-data" class="form-horizontal">
   <tr>
   <td><h5>Nama Product :</td>
   <td><input type = "text" name = "nama_product" value="{{ $product->nama}}"></td><br>
   </tr>
   <tr>
        <td><h5>Tentang Produk</h5></td>
        <td><textarea name = "tentang" id = "tentang" cols = "50" rows = "4"></textarea></td>
   </tr>
   <tr>
   <td><h5>harga Products :</td>
   <td><input type = "text" name = "harga_product" id ="harga_product" value = "{{ $product->harga}}"></td><br>
   </tr>
   <td><h5>change Uploaded Image : </td>
   <td><input type = "file"  id = "gambar" name = "gambar"  value = "{{$product->gambar}}"><img src = "{{ url('uploadgambar') }}/{{ $product->gambar }}" width = "200" height = "100">
       <input type = "hidden" name = "MAX_FILE_SIZE" value = "1000000"></td>
  <tr>
  <td><input type = "submit" name = "submit" value = "Edit" class = "btn btn-primary">
  {{ csrf_field() }}
  <input type = "hidden" name = "_method" value = "PUT"></td>
   </table>
</form>

@endsection