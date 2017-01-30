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
@if(count($name)>0)
@foreach($name as $data)
        <tr>
               <td><h5>id_pelanggan</td>
               <td><h5><input type = "text" name = "id" value="{{ $data->id }}"></td>
        </tr>       
        <tr>       
               <td><h5>id_prd</td>
               <td><h5><input type = "text" name = "id_prd" value = "{{ $data->id_prd }}"></td>
        </tr>
        <tr>       
               <td><h5>nama_prd</h6></td>
               <td><h5><input type = "text" name = "nama_prd" value = "{{ $data->nama_prd }}"></td>
        </tr>
        <tr>       
               <td><h5>harga</td>
               <td><h5><input type = "text" name = "harga" value = "{{ $data->harga }}"></td>
        </tr>       
        <tr>       
               <td><h5>Nama_Pelanggan</td>
               <td><h5><input type = "text" name = "nama" value = "{{ $data->nama }}"></td>
        </tr>       
        <tr>       
               <td><h5>alamat_pelanggan</td>
               <td><h5><input type = "text" name = "alamat" value = "{{ $data->alamat}}"></h5></td>
        </tr>       
        <tr>       
               <td><h5>no_pelanggan</h5></td>
               <td><h5><input type = "text" name = "no_hp" value = "{{ $data->no_hp }}"></td>
        </tr>
        <tr>
               <td><h5>tunggakan</td>
               <td><h5><input type = "text" name = "tunggakan" value = "{{ $data->tunggakan }}"></td>
        </tr>       
        <tr>       
               <td><h5>Pembayaran</h5></td>
               <td><input type = "text" name = "pembayaran" id= "pembayaran" value = "">
        </tr>
        <tr>       
               <td><h5>action</h5></td>               
               <td><h5><center><form action = "upgrade/{{ $data->id }}"><input type ="submit" name = "upgrade" value = "OK" class = "btn btn-primary"></a></center></h6></h5></form>
        </tr>

  @endforeach             
               
               @endif
               
               
               
               
               
               

                      
                     

              
       
        </tbody>
        </table>
    </div>
    </body>
    </html> 

    @endsection     