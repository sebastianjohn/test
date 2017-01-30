@extends('layouts.master')

@section('title', 'Customers')

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
             <th>nama_customer</th>
             <th>alamat</th>
             <th>No_hp</th>
             <th>button</th>
       </thead>
       @foreach($user as $users)         
       <tbody> 
                  
             <td>{{ $users->name}}</td>
             <td>{{ $users->alamat}}</td>
             <td>{{ $users->no_hp}}</td>
             <td><a href = "customer/{{$users->id}}"><input type = "button" name = "lihat" id = "lihat" value = "lihat transaksi"    class= "btn btn-primary"></a></td>
       </tbody>
       @endforeach
       </table>
       </body>
       </div>
       </html>     
	        
	        @endsection