{{-- <!DOCTYPE html>
<html>
<head>
  <title>Laravel 8 Generate PDF Using DomPDF - Techsolutionstuff</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

  <div class="container">
    <div class="row">
      <div class="col-lg-12" style="margin-top: 15px ">
        <div class="pull-left">
          <h2>Laravel 8 Generate PDF Using DomPDF - Techsolutionstuff</h2>
        </div>
        <div class="pull-right">
          <a class="btn btn-default" href="{{route('users.index',['download'=>'pdf'])}}">Download</a>
        </div>
      </div>
    </div><br>

    <table class="table table-bordered">
      <tr>
        <th>Name</th>
        <th>Email</th>
      </tr>

      @foreach ($users as $user)
      <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
      </tr>
      @endforeach
    </table>
  </div>
</body>
</html> --}}

<!DOCTYPE html>
<html>
<head>
    <title>Laravel 9 Generate PDF Example - ItSolutionStuff.com</title>
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}
</head>
<body>

    <div class="container">
      <div class="row">
        <div class="col-lg-12" style="margin-top: 15px ">
          <div class="pull-left">
          </div>
          <div class="pull-right">
            <a class="btn btn-default" href="{{url('/dompdf?download=pdf')}}">Download</a>
          </div>
        </div>
      </div><br>
  
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
        </tr>
        @endforeach
    </table>
</div>
</body>
</html>