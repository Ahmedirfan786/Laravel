<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Create</title>
</head>

<body>
<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="/">⬅️ Laravel Crud</a>
</nav>

        @if($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <strong>{{$message}}</strong>
            </div>
        @endif
    <div class="container-fluid">
    
        <div class="row">

            <div class="col-lg-12">
                <div class="card mt-3 p-3">
                    <h2>Add Product</h2>
                    <form method="post" action="/store" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" value="{{old('name')}}" class="form-control">

        <!-- Error appear on name field empty -->
        @if ($errors->has('name'))
        <span class="text-danger">{{$errors->first('name')}}</span>
        @endif
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea class="form-control" name="description" rows="4">{{old('description')}}</textarea>
        
        <!-- Error appear on description field empty -->
        @if ($errors->has('description'))
        <span class="text-danger">{{$errors->first('description')}}</span>
        @endif
    </div>
    <div class="form-group">
        <label>Image</label>
        <input type="file" name="image" class="form-control">
        
        <!-- Error appear on image field empty -->
        @if ($errors->has('image'))
        <span class="text-danger">{{$errors->first('image')}}</span>
        @endif
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>


                </div>
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