@extends('layouts.master')

@section('title', 'Project')

@section('content')

<html>
<head><title>Orders</title>
<link href = "//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel = "stylesheet">
<link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
<div class = "container">
<table class = "table table-bordered">
     <thead>
            <th>Name</th>
            <th>Order</th>
     </thead>
@foreach ($orders as $order)

     <tbody>
            <td>{{ $order->getname() }}</td>
            <td>{{ $order->getproduct() }}</td>
     </tbody>
     @endforeach
</table>

</body>
</div>
</html> 

@endsection           


