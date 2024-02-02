<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-hover">
                            <tr>
                                <th>Title</th>
                                <th>Content</th>
                                <td>Action</td>
                            </tr>
                            @foreach ($users as $item)
                                <tr>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>
                                        <a href="#" color="red">show</a>    
                                        <a href="#">create</a>   
                                        @can('delete')    
                                            <a href="#">edit</a> 
                                        @endcan    
                                        @can('delete')  
                                            <a href="#">delete</a> 
                                        @endcan   

                                        <div class="divider"></div>
                                        @hasrole('Admin')
                                            <a href="#" color="red">show</a>  
                                            <a href="#">edit</a> 
                                            <a href="#">delete</a>
                                        @endrole

                                        <div class="divider"></div>
                                        @if (auth()->user()->role == 'admin')
                                            <a href="#" color="red">show</a>  
                                            <a href="#">edit</a> 
                                            <a href="#">delete</a>
                                        @endif

                                        <div class="divider"></div>
                                        @if (auth()->user()->can('edit-post'))
                                            <a href="#">edit</a> 
                                        @endif
                                        @if (auth()->user()->can('delete-post'))
                                            <a href="#">delete</a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>