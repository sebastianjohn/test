@extends('layouts.master')

@section('title', 'Product View')

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
     <h4>Product Table</h4>
     <form action = "/project/buy" method = "post">
     <table class = "table  table-bordered">
     <thead>
            <tr>
                   <th><h6>id</th>
                   <th><h6>Nama produk</th>
                   <th><h6>Deskripsi</th>
                   <th><h6>Harga</th>
                   <th><h6>Image</th>
                   
            </tr>
     </thead>
          <tbody>
             <tr>
                    <td><h6>{{ $project->id }}</td>
                    <td><h6>{{ $project->nama_prd }}</td>
                    <td><h6>{{ $project->spek }}</td>
                    <td><h6>{{ $project->harga }}</td>
                    <td><img src = "{{ url('uploadgambar') }}/{{ $project->gambar }}" width = "200" height = "100"></td>
              
            </tr> 
            </tbody>

            </table>

@endsection

