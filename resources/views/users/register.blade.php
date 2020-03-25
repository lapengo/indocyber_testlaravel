<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soal 3 - Register</title>

    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
        <h2>Registrasi User</h2>
        <hr>

        <a class="btn btn-info text-white btn-sm" href="{{route('users.index')}}">Lihat Data Users</a> <br><br>

        <form action="{{route('users.store')}}" method="POST" enctype="multipart/form-data">
          
          @csrf

          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
          </div> 
          <div class="form-group">
            <label for="password2">Re-Enter Password:</label>
            <input type="password2" class="form-control" id="password2" placeholder="Re-Enter Password" name="password2">
          </div> 
          <div class="form-group">
            <label for="nohp">Phone Number:</label>
            <input type="text" class="form-control" id="nohp" placeholder="Enter Phone Number" name="nohp">
          </div> 
          <div class="form-group">
            <label for="alamat">Place:</label> 
            <textarea name="alamat" class="form-control is-invalid" id="alamat" placeholder="Enter Your Place" required></textarea>
          </div> 
          {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
          <input  class="btn btn-primary"  type="submit"  value="Save"/>
        </form>
      </div>
      
</body>
</html>