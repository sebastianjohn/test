@extends('layouts.master')

@section('title', 'Project')

@section('content')
   <head>
   <meta charset = "utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE-edge">
   <meta name = "viewport" content="width=devide-width, initial-scale=1">
   <link href = "//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel = "stylesheet">
   <link rel="stylesheet" type="text/css" href="/css/css.css">
   <script type="text/javascript" src="/js/jquery-1.3.2.js"></script>
   <script type="text/javascript" src="/js/jquery.livequery.js"></script>
   <script>
   var i=0;
$("#beli").live("click", function(){
    var nama=$(this).attr('nama');
    var harga=$(this).attr('harga');
    var total=harga+harga;
    i++;
   $('.keranjang').append('<p>'+i+' | ' +nama+ ' | ' +harga +'<button class="rm">Batal</button></p>');
    
   return false;
});

$(".rm").live("click", function(){
    $(this).parents('p').remove();i--;
});
</script>
   </head>
   <body>
     <div class = "container">
     <h4>Product Table</h4>
     <form action="/uhasil" action="POST">
            <div class="form-group">
                    <label for="cari"><h4>Cari Barang Berdasarkan Nama</h4></label>
                       <input type = "text" class="form-control" id = "cari" name = "cari" placeholder="cari">
            </div>
                         <input class = "btn btn-primary" type="submit" value = "Cari">
     </form>
     </div>
     <div id = "kiri">
     
     <div class="keranjang">
     </div>
     
     </div>

<div id = "kontainer">
  
     <table class = "table  table-bordered">
       <tr>
                   <th><h5>id</th>
                   <th><h5>Nama produk</th>
                   <th><h5>Deskripsi</th>
                   <th><h5>Harga</th>
                   <th><h5>Image</th>
                   <th><h5>action</th>
                  
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
                    <td><center><a href = "/uhome/{{$data->id}}/buy"><input type ="submit" name = "edit" value = "buy" class = "btn btn-primary"></a>
                                <input type = "button" id = "beli" nama = "{{$data->nama_prd}}" harga = "{{$data->harga}}" value = "add to cart" class = "btn btn-primary"></center></td>
                

            </tr> 
    @endforeach
    </tbody>
    </table>
    </div>
    <div class = "form-group">
    <?php echo str_replace('/?', '?', $project->render());?></div>
    </div>

    </body>

@endsection


