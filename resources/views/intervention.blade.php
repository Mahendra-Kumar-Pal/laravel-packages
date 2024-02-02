<!DOCTYPE html>
<html>
<head>
    <title>Laravel Image Intervention Example Tutorial - ItSolutionStuff.com</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
<div class="container">
    <h4>Laravel Image Intervention Example Tutorial - ItSolutionStuff.com</h4>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
           
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ $message }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <div class="row">
            <div class="col-md-4">
                <strong>Original Image:</strong>
                <br/>
                <img src="/intervention/{{ Session::get('imageName') }}" width="300px" />
            </div>
            <div class="col-md-4">
                <strong>Thumbnail Image:</strong>
                <br/>
                <img src="intervention/thumbnail/{{ Session::get('imageName') }}" />
            </div>
        </div>
    @endif
            
    <form action="{{ url('image-upload') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <input type="file" name="image" class="image">
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-secondary">Upload Image</button>
            </div>
        </div>
    </form>
</div>
    
</body>
</html>