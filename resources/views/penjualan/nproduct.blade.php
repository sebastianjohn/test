@extends('layouts.master')

@section('title', 'New Product')

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
  


<h3>Input Product</h3>
<hr>

<form action = "/pby" method = "post" enctype="multipart/form-data">
   
   <tr>
         <td>Nama_product</td>
         <td><input type = "text" name = "nama_product" id = "nama_product" class = "form-group"></td>
   </tr>
   <tr>
         <td>Tentang Produck</td>
         <td><textarea name = "tentang" id = "tentang" value = "" cols = "50" rows = "4"></textarea></td>
   <tr>
         <td>harga</td>
        <td><input type = "text" name = "harga_product" id = "harga_product" class = "form-group"></td>
  </tr>
  <tr>
        <td>image</td>
        <td><input type = "file" id = "gambar" name = "gambar">
            <input type = "hidden" name = "MAX_FILE_SIZE" value = "1000000">
               @if($errors->has('gambar'))
              {{$errors->first('gambar')}}
                    @endif</td>
                   
                   

  </tr>
   <tr>
  <td><input type = "submit" name = "submit" value = "OK" class = "btn btn-primary">
      <input type = "reset" name = "reset" value = "reset" class = "btn btn-primary"></td>
  </tr>
  {{ csrf_field() }}
  </tr>
  
  </table>
</form>
@if(count($errors) > 0)
     <div class = "row">
          <ul>
              @foreach($errors->all() as $error)
                 <li>{{ $error }}</li>
              @endforeach
          </ul>
     </div>
@endif     



@endsection