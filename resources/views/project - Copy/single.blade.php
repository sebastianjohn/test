@extends('layouts.master')

@section('title', 'Product View')

@section('content')
  <head>
   <meta charset = "utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE-edge">
   <meta name = "viewport" content="width=devide-width, initial-scale=1">
   <link href = "//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel = "stylesheet">
   </head>
   <body>
 <div class = "container">
     <h4>Product Table</h4>
     <table class = "table table-hover table-bordered">
     <thead>
            <tr>
                   <th>id</th>
                   <th>Nama produk</th>
                   <th>Deskripsi</th>
                   <th>Harga</th>
                   
            </tr>
     </thead>
          <tbody>
             <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->nama_prd }}</td>
                    <td>{{ $project->spek }}</td>
                    <td>{{ $project->harga }}</td>
              
            </tr> 
            </tbody>

            </table>

@endsection

