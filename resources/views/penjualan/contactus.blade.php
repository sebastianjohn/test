@extends('layouts.master')

@section('title', 'Contact Us')

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
  


<h3>Contact Us</h3>
<left>This Is The Place Where You Can Contact Our Admin</left>
<hr>
<div id = 'kiri'>
<h5>Nama Anda<br></h5>
<input type = "text" name = "nama" id = "nama" value = "" size = "20px" class = "form-control">

<h5>Alamat Anda<br></h5>
<textarea name = "alamat" id = "alamat" cols = "42" rows = "4" class = "form-control"></textarea>
<h5>No Handphone<br></h5>
<input type = "text" name = "handphone" id = "handphone" value = "" size = "40px" class = "form-control">
<h5>Email<br></h5>
<input type = "text" name = "email" id = "email" value = "" size = "40px" class = "form-control">

<h5>Comments<br></h5>
<textarea name = "alamat" id = "alamat" cols = "42" rows = "5" class = "form-control"></textarea>

<h5>Country<br></h5>
<select name = "country" id = "country" class = "form-control">
<option value = "">Select Your Country</option>
<option value = "indonesia">Indonesia</option>
<option value = "singapore">Singapore</option>
<option value = "australia">Australia</option>
<option value = "unitedstates">United States</option>
<option value = "unitedkingdom">United Kingdom</option></select>
<br>
<input type = "submit" name = "submit" id = "submit" value = "submit" class = "btn btn-info">
</div>

<div id = "kontainer">
<h5>Call Center Numbers</h5>
<hr>
<h5>(888922)908882112</h5>
<h5>(888922)908882112</h5>
<h5>(888922)908882112</h5>
<h5>(888922)908882112(Indonesia)</h5>
<h5>(888922)908882112(Australia)</h5>
<hr>
<h5>Customer Care</h5>
<hr>
</div>


@endsection
