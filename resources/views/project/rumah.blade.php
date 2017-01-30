@extends('layouts.masters')

@section('title', 'Project')

@section('content')
   <head>
   <meta charset = "utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE-edge">
   <meta name = "viewport" content="width=devide-width, initial-scale=1">
   <link href = "//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel = "stylesheet">
   </head>
   <body>
 <div class = "container">
     <h4>Product Table</h4>
     <table class = "table table-hover table-bordered">
     <thead>
            <tr>
                   <th>id</th>
                   <th>Nama produk</th>
                   <th>Deskripsi</th>
                   <th>Harga</th>
            </tr>
     </thead>
     <tbody>

     @foreach ($project as $data)

             <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->nama_prd }}</td>
                    <td>{{ $data->spek }}</td>
                    <td>{{ $data->harga }}</td>
            </tr> 
    @endforeach
    </tbody>
    </table>
    <?php echo str_replace('/?', '?', $project->render());?>
    </div>
    </body>

@endsection


