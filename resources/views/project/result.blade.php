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
               <th><h5>id_prd</th>
               <th><h5>Nama_prd</th>
               <th><h5>Deskripsi</th>
               <th><h5>Created At</th>
               <th><h5>Image</th>
               <th colspan = "3"><h5><center>action</center></th>
        </tr>
        </thead>
        <tbody>
        @if (count($name)>0)
              @foreach($name as $data)
        <tr>
               <td><h5>{{ $data->id }}</td>
               <td><h5>{{ $data->nama_prd }}</td>
               <td><h5>{{ $data->spek }}</td>
               <td><img src = "{{ url('uploadgambar') }}/{{ $data->gambar }}" width = "200" height = "100"></td>
               <td><h5>{{ $data->created_at}}</td>
               <td><center><h5><a href = "/project/{{$data->id}}"><input type ="submit" name = "edit" value = "View" class = "btn btn-primary"></a></center></td>
               <td><center><h5><a href = "/project/{{$data->id}}/edit"><input type ="submit" name = "edit" value = "Edit" class = "btn btn-primary"></a></center></td>
               <td><center><h5><a href = "/project/{{$data->id}}/delete"><input type ="submit" name = "edit" value = "Delete" class = "btn btn-primary"></a></center></td>
                      
        </tr>             

              @endforeach
        @else
        Data tidak ditemukan
        @endif
        </tbody>
        </table>
    </div>
    </body>
    </html> 

    @endsection                