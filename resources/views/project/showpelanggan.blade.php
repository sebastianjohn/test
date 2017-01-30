@extends('layouts.master')

@section('title', 'View Pelanggan')

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
                   <th>id_pl</th>
                   <th>id_prd</th>
                   <th>Nama_prd</th>
                   <th>Nama_pelanggan</th>
                   <th>Alamat_pelanggan</th>
                   <th>no_hp</th>
                   
            </tr>
     </thead>
          <tbody>
             <tr>
                    <td>{{ $pelanggan->id }}</td>
                    <td>{{ $pelanggan->id_prd }}</td>
                    <td>{{ $pelanggan->nama_prd }}</td>
                    <td>{{ $pelanggan->nama }}</td>
                    <td>{{ $pelanggan->alamat }}</td>
                    <td>{{ $pelanggan->no_hp }}</td>

              
            </tr> 
            </tbody>

            </table>

@endsection