@extends('layouts.app')

@section('content') 
    <div class="container">

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
        <td>
            @if(isset($produk->image))
                <img src="{{ URL::to('/') }}/produk-image/{{$produk->image}}" class="img-fluid" alt="Responsive image">
            @else
                Tidak Tersedia
            @endif
        </td>
    </tr>
</table>
    </div>

    @endsection