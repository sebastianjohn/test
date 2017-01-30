@extends('layouts.master')

@section('title', 'Pelanggan')

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
     <h3>Pelanggan Table</h3>
      <form action="/phasil" action="POST">
            <div class="form-group">
                    <h3><label for="cari">cari nama pelanggan</label></h3>
                       <input type = "text" class="form-control" id = "cari" name = "cari" placeholder="cari">
            </div>
                         <input class = "btn btn-primary" type="submit" value = "Cari">
     </form>


     <table class = "table  table-bordered">
     <thead>
            <tr>
                   <th><h5>id_pelanggan</th>
                   <th><h5>id_prd</th>
                   <th><h5>nama_prd</th>
                   <th><h5>nama_pembeli</th>
                   <th><h5>alamat_pembeli</th>
                   <th><h5>no_hp</th>
                   <th><h5>Tunggakan</h6>
                   <th colspan = "2"><center><h5>action</center></h6></th>
            </tr>
     </thead>
          <tbody>
     @foreach ($pelanggan as $data)

             <tr>
                    <td><h5>{{ $data->id}}</td>
                    <td><h5>{{ $data -> id_prd }}</td>
                    <td><h5>{{ $data->nama_prd }}</td>
                    <td><h5>{{ $data->nama }}</td>
                    <td><h5>{{ $data->alamat }}</td>
                    <td><h5>{{ $data->no_hp }}</td>
                    <td><h5>{{ $data->tunggakan}}</h6>
                     <td><h5><center><a href = "/project/pelanggan/{{$data->id}}/delete"><input type ="submit" name = "edit" value = "Delete" class = "btn btn-primary"></a></center></h6></td>
                     <td><h5><center><a href = "/project/pelanggan/{{$data->id}}/bayar"><input type = "submit" name = "bayar" value = "Pembayaran" class = "btn btn-primary"></a></center></h5>
            </tr>     
    @endforeach
            </tbody>
            </table>
<?php echo str_replace('/?', '?', $pelanggan->render());?>
@endsection