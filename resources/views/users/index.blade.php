<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index Users</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</head>
<body>

    <h1>Data Users</h1>
    <hr>

    

    @if(session('status1'))  
        <div class="alert alert-info alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong> {{session('status')}}
            </div>
    @endif 

    <a class="btn btn-info text-white btn-sm" href="{{route('users.create')}}">Tambah User</a>
    <a class="btn btn-warning text-white btn-sm" href="{{'/'}}">Back Menu Utama</a>
    <a class="btn btn-primary text-white btn-sm" href="{{'login'}}">Login</a>

    <br><br>

    <table class="table table-striped table-dark">
        <thead>            
        <tr> 
            <th>No. </th>
            <th>Email</th>
            <th>Phone</th>
            <th>Place</th>
        </tr> 
        </thead>
        <tbody>
            @foreach ($users as $row)          
            <tr> 
                <td>{{$loop->iteration}}</td>
                <td>{{$row->email}}</td>
                <td>{{$row->nohp}}</td>
                <td>{{$row->alamat}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>