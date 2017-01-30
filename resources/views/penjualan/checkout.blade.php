@extends('layouts.master')

@section('title', 'Checkout')

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
   <table class = "table table-hover table-bordered">
  


<h3>Checkout</h3>
<hr>

<form action = "#" method = "post">
   
   <tr>
         <td>Customer ID</td>
         <td><input type = "text" name = "customer_id" id = "customer_id"></td>
   </tr>
   <tr>
         <td>Harga Gorengan</td>
         <td><input type = "text" name = "harga_gorengan" id = "harga_gorengan" value = "" readonly="true"></td>
         </tr>
   <tr>
  <td><input type = "submit" name = "submit" value = "OK" class = "btn btn-primary">
      <input type = "reset" name = "reset" value = "reset" class = "btn btn-primary"></td>
  </tr>
  {{ csrf_field() }}
  </tr>
  </table>
</form>


@endsection