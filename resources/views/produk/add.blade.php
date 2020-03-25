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
        <h2>Form - Produk</h2>
        <hr>

        <a class="btn btn-info text-white btn-sm" href="{{route('produk.index')}}">Lihat Data Produk</a> <br><br>
          <form
            action="{{route('produk.store')}}"
            enctype="multipart/form-data"
            method="POST"
            class="bg-white shadow-sm p-3"
          >

          @csrf

              <div class="form-group">
                  @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif
              </div>

          <div class="form-group">
            <label for="nama_produk">Nama Produk:</label>
            <input type="text" value="{{old('nama_produk')}}" class="form-control" id="nama_produk" placeholder="Enter Nama Produk" name="nama_produk">
          </div>
          <div class="form-group">
            <label for="harga">Harga:</label>
            <input type="text" value="{{old('harga')}}"  class="form-control" id="harga" placeholder="Enter Harga" name="harga">
          </div>
          <div class="form-group">
            <label for="stok">Stok:</label>
            <input type="text" value="{{old('stok')}}"  class="form-control" id="stok" placeholder="Enter Stok" name="stok">
          </div>
          <div class="form-group">
            <label for="image">Gambar:</label>
            <input type="file" class="form-control" id="image"  name="image">
          </div>
          {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
          <input  class="btn btn-primary"  type="submit"  value="Save"/>
        </form>
      </div>

</body>
</html>
