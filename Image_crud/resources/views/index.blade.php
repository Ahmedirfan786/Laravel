<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Index</title>
</head>


<body>
<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="/">Laravel Crud</a>
</nav>

@if($message = Session::get('success'))
            <div class="alert alert-danger alert-block">
                <strong>{{$message}}</strong>
            </div>
        @endif
    <div class="container-fluid">
    
        <div class="row">
            <div class="col-lg-12 p-4">
                <h2>Products</h2>
                <button class="btn btn-success mb-3"><a class="text-white" href="{{route('create')}}">+ Add Product</a></button>

                <table class="table table-striped table-bordered table-hover">
                  <thead>
                  <tr class="bg-dark text-white">
                        <th>Id</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th colspan="2">Actions</th>
                    </tr>
                  </thead>
                   <tbody>
                    @foreach ($productsdata as $data )
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{$data->name}}</td>
                            <td>
                                <img src="products/{{$data->image}}" width="50" height="50" alt="">
                            </td>
                            <td>
                                <button class="btn btn-info">
                                    <a class="text-white" href="/show/{{$data->id}}">View</a>
                                </button>
                                <button class="btn btn-warning">
                                    <a class="text-white" href="/edit/{{$data->id}}">Edit</a>
                                </button>
                                <button class="btn btn-danger">
                                <a class="text-white" href="/delete/{{$data->id}}">Delete</a>
                                </button>

                                <!-- Delete By Laravel route::delete -->
                                <!-- <form action="POST" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">
                                <a class="text-white" href="/delete/{{$data->id}}">Delete By Laravel route::delete</a>
                                </button>
                                </form> -->
                            </td>
                        </tr>
                    @endforeach
                   </tbody>

                </table>
            </div>
        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
    integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
    crossorigin="anonymous"></script>

</html>