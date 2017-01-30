@extends('layouts.master')

@section('title', 'Project')

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

     <h3>Product Table Manager</h3>
     <form action="/hasil" action="POST">
            <div class="form-group">
                    <label for="cari"><h3>Cari Barang Berdasarkan Nama</h3></label>
                       <input type = "text" class="form-control" id = "cari" name = "cari" placeholder="cari">
            </div>
                         <input class = "btn btn-primary" type="submit" value = "Cari">
     </form>



  
     <table class = "table  table-bordered">
       <tr>
                   <th>id</th>
                   <th>Nama produk</th>
                   <th>Deskripsi</th>
                   <th>Harga</th>
                   <th>Image</th>
                   <th>Created At</th>
                   <th colspan = "3"><center>Action</center></th>
                  
            </tr>
     </thead>
     <tbody>

     @foreach ($project as $data)

             <tr>
                    <td><h5>{{ $data->id }}</td>
                    <td><h5>{{ $data->nama_prd }}</td>
                    <td><h5>{{ $data->spek }}</td>
                    <td><h5>{{ $data->harga }}</td>
                    <td><img src = "{{ url('uploadgambar') }}/{{ $data->gambar }}" width = "200" height = "100"></td>
                    <td><h5>{{ $data->created_at}}</td>
                    <td><h5><center><a href = "/project/{{$data->id}}"><input type ="submit" name = "edit" value = "View" class = "btn btn-primary"></a></center></td>
                    <td><h5><center><a href = "/project/{{$data->id}}/edit"><input type ="submit" name = "edit" value = "Edit" class = "btn btn-primary"></a></center></td>
                    <td><h5><center><a href = "/project/{{$data->id}}/delete"><input type ="submit" name = "edit" value = "Delete" class = "btn btn-primary"></a></center></h6></td>

            </tr> 
    @endforeach
    </tbody>
    </table>
      <form action= "/project/create" action="POST">
      <div class = "form-group">
      <input type = "submit" name = "create" value = "Create New" class="btn btn-primary">
    </div>
    <?php echo str_replace('/?', '?', $project->render());?>
    </div>
    </body>

@endsection


