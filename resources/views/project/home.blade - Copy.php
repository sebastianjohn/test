@extends('layouts.master')

@section('title', 'Project')

@section('content')
<h1>Welcome To my New Project</h1>
<p>New Product</p>

<hr>
<h3>Product List</h3>
@foreach($project as $produk)
 <li>
     <a href = "/project/{{$produk->id}}">{{ $produk->nama_prd }}</a>



 </li>    
@endforeach 
@endsection


