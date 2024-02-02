<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 offset-4">
                <div class="card">
                    <div class="card-body bg-light">
                        <form action="{{ url('youtube') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <p><input type="text" name="title" placeholder="Enter Video Title" class="form-control" /></p>
                            <p><textarea name="description" cols="30" rows="10" placeholder="Video description" class="form-control"></textarea></p>
                            <p><input type="file" name="video" class="form-control" /></p>
                            <button type="submit" class="form-control">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>