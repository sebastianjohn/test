@extends('layouts.master')

@section('title', 'create')

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
     <form action = "/project" method = "POST" enctype = "multipart/form-data">
     <table class = "table table-hover table-bordered">
     <thead>
            <tr>
                   <th><h6>nama_prd</th>
                   <th><h6>deskripsi</th>
                   <th><h6>harga</th>
                   <th><h6>Image</th>
                   
                   
            </tr>
     </thead>
          <tbody>
             <tr>
                    <td><input type = "text" name = "nama_prd">
                    @if($errors->has('nama_prd'))  
                    {{$errors->first('nama_prd')}}
                    @endif</td>
                    <td><input type = "text" name = "spek">    
                    @if($errors->has('spek'))  
                    {{$errors->first('spek')}}
                    @endif</td>
                    <td><input type = "text" name = "harga">     
                    @if($errors->has('harga'))  
                    {{$errors->first('harga')}}
                    @endif</td>
                    <td><input type = "file" id = "gambar" name = "gambar">
                        <input type = "hidden" name = "MAX_FILE_SIZE" value = "1000000">
                    @if($errors->has('file_gambar'))
                    {{$errors->first('file_gambar')}}
                    @endif</td>
                   
              
            </tr> 
            </tbody>

            </table>
            <center><input type = "submit" name = "submit" value = "Create" class = "btn btn-primary">
                    <a href = '/project'><input type = 'button' name = 'reset' value= 'kembali' class="btn btn-primary"></a></center>
</tr>
     {{ csrf_field() }}
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
