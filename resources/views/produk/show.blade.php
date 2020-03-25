<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Produk</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
<h1>Detail Produk - {{$produk->nama_produk}}</h1>
<hr>

<a class="btn btn-info text-white btn-sm" href="{{route('produk.index')}}">Lihat Data Produk</a> <br><br>


<table class="table table-striped">
    <tr>
        <td width="10%">ID Produk</td>
        <td width="20px">:</td>
        <td>{{$produk->id}}</td>
    </tr>
    <tr>
        <td>Nama Produk</td>
        <td>:</td>
        <td>{{$produk->nama_produk}}</td>
    </tr>
    <tr>
        <td>Harga Produk</td>
        <td>:</td>
        <td>{{$produk->harga}}</td>
    </tr>
    <tr>
        <td>Stok Produk</td>
        <td>:</td>
        <td>{{$produk->stok}}</td>
    </tr>
    <tr>
        <td>Image Produk</td>
        <td>:</td>
        <td>{{$produk->image}}</td>
    </tr>
</table>

</body>
</html>