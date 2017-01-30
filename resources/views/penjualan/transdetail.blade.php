@extends('layouts.master')

@section('title', 'Detail')

@section('content')


<html>
<head><title>show</title>
<link href = "//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel = "stylesheet">
<link rel="stylesheet" type="text/css" href="/css/css.css">
</head>
<body>
<div class = "container">
<table class = "table table-bordered">
                
       
       <thead>
             <th>order_id</th>
             <th>product_id</th>
             <th>product_name</th>
             <th>harga_product</th>
             <th>jumlah_product</th>
             <th>Harga_total</th>
             <th>button</th>
       </thead>
       <tr>          
             <td>{{ $detail->order_id }}</td>
             <td>{{ $detail->product_id }}</td>
             <td>{{ $detail->getname()}}</td>
             <td>{{ $detail->harga_gorengan}}</td>
             <td>{{ $detail->jumlah_beli}}</td>
             <td>{{ $detail->total_harga}}</td>
             <td><a href = "#"><input type = "button" name = "detail" id = "detail" value = "detail" class = "btn btn-primary"></a></td>
       </tr>
       </table>
       </body>
       </div>
       </html>     
	        
	        @endsection