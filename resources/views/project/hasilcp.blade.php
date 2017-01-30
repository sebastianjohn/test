@extends('layouts.master')

@section('title','result')

@section('content')
<head>
       <meta charset = "utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name = "viewport" content="width=device-width, initial-scale=1">
       <title>pencarian</title>
       <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
       <link rel="stylesheet" type="text/css" href="/css/css.css">
</head>
<body>

<div class = "container">
<h3>Hasil Pencarian</h3>
<table class = "table  table-bordered">
<thead>
        <tr>
               <th><h5>id_pelanggan</th>
               <th><h5>id_prd</h6></th>
               <th><h5>nama_prd</h6></th>
               <th><h5>Nama_Pelanggan</th>
               <th><h5>alamat_pelanggan</h6></th>
               <th><h5>no_hp</h6></th>
               <th><h5>tunggakan</h6></th>
               <th colspan = "2"><h5><center>action</h6></th>               
        </tr>
        </thead>
        <tbody>
        @if (count($name)>0)
              @foreach($name as $data)
        <tr>
               <td><h5>{{ $data->id }}</td>
               <td><h5>{{ $data->id_prd }}</td>
               <td><h5>{{ $data->nama_prd }}</td>
               <td><h5>{{ $data->nama }}</td>
               <td><h5>{{ $data->alamat }}</td>
               <td><h5>{{ $data->no_hp }}</td>
               <td><h5>{{ $data->tunggakan }}</td>
               <td><h5><center><a href = "/project/pelanggan/{{$data->id}}/delete"><input type ="submit" name = "edit" value = "Delete" class = "btn btn-primary"></a></center></h6></td>
               <td><h5><center><a href = "/project/pelanggan/{{$data->id}}/bayar"><input type ="submit" name = "edit" value = "Pembayaran" class = "btn btn-primary"></a></center></h6></td>       
        </tr>             

              @endforeach
        @else
        <h5>Data tidak ditemukan</h5>
        @endif
        </tbody>
        </table>
    </div>
    </body>
    </html> 

    @endsection                