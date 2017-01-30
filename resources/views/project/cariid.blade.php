@extends('layouts.master')
@section('title', 'Pembayaran')

@section('content')

<html>
     <head>
          <meta charset = "utf-8">
          <meta http-equiv="X-UA-Compatible" content = "IE=edge">
          <meta name = "viewport" content = "width=device-width, initial-scale=1">
          <title>Pencarian</title>
          <link href ="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"
          rel = "stylesheet">
          <link rel="stylesheet" type="text/css" href="/css/css.css">
    </head>
    <body>
          <div class = "container">
                     <h3>pencarian ID</h3>
                     <hr>
                     <form action="/hasilid" action="POST">
                           <div class="form-group">
                              <label for="cari"><h4>Cari ID</h4></label>
                              <input type = "text" class="form-control" id = "cari" name = "cari" placeholder="cari">
                           </div>
                           <input class = "btn btn-primary" type="submit" value = "Find">
                         </form>
                        </div>
                        </body>
                        </html> 

@endsection                          