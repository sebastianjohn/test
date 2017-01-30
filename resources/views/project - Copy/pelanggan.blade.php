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
     <h4>Pelanggan Table</h4>
     <table class = "table table-hover table-bordered">
     <thead>
            <tr>
                   <th>id_prd</th>
                   <th>nama_prd</th>
                   <th>nama_pembeli</th>
                   <th>alamat_pembeli</th>
                   <th>no_hp</th>
            </tr>
     </thead>
          <tbody>
     @foreach ($pelanggan as $data)
             <tr>
                    <td>{{ $data -> id_prd }}</td>
                    <td>{{ $data->nama_prd }}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->alamat }}</td>
                    <td>{{ $data->no_hp }}</td>
            </tr> 
    @endforeach
            </tbody>

            </table>

@endsection