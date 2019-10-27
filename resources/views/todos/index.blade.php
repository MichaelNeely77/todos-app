<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Todo's</title>
</head>
<body>
<div class="container">
    <h1 class="text-center my-5">This is the Todos page</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="card card-default">
                        <div class="card-header">
                            Todos
                        </div>
                        <div class="card-body">
                            @foreach($todos as $todo) 
                            <ul class="list-group">
                                <li class="list-group-item">
                                    
                                    {{ $todo->name }}
                                    <button class="btn btn-primary btn-sm float-right">View</button>
                                </li>
                            </ul>
                            
                            @endforeach
                        </div>
                    </div>
        </div>
    </div> 


</div>
    
</body>
</html>