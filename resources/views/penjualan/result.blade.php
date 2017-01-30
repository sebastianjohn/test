@extends('layouts.master')

@section('title', 'Hasil Cari Gorengan')

@section('content')


<html>
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>result</title>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="/css/css.css">
</head>
<body>

<div class = "container">
<form action="/result" action="POST">
            <div class="form-group">
                    <label for="cari"><h3>Cari Product</h3></label>
                       <input type = "text" class = "form-control" id = "cari" name = "cari" placeholder="cari" size = "20px">
            </div>
                         <input class = "btn btn-primary" type="submit" value = "Find Gorengan"></form>
<h3>Hasil Cari</h3>
<hr>


         
     
         @if (count($name) > 0)
              @foreach ($name as $data)
            <div class = "col-md-3">
               <div class = "box">
               <img src = "{{ url('uploadgambar') }}/{{ $data->gambar }}" alt=""/>
               <div class = "desc">
                  <h5>{{ $data->nama}}</h5>
                  <p> {{ $data->tentang}}</p>
               </div>
               <div class = "social">
                <div class = "likes">Rp.{{$data->harga}}</div>
                <div class = "prize">
                       <a href = "product/cart/{{$data->id_product}}"><input type = "button" name = "add" id = "add" value = "Add To Cart" class = "btn btn-primary"></a></div>
                       </div>
                       </div>
              </div>

              
   
              
          @endforeach
         @else
         Gorengan tidak ada/kosong.
         @endif
   
         </div>
         </body>
         </html>         

@endsection