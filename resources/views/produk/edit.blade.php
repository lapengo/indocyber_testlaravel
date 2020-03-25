@extends('layouts.app')

@section('content') 
    <div class="container">
        <h2>Edit - Produk {{$produk->nama_produk}}</h2>
        <hr>

        <a class="btn btn-info text-white btn-sm" href="{{route('produk.index')}}">Lihat Data Produk</a> <br><br>
          
        @if(session('status'))  
            <div class="alert alert-info alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> {{session('status')}}
              </div>
        @endif 
        
        <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{route('produk.update', ['id'=>$produk->id])}}" method="POST">

          
          @csrf
          <input type="hidden" value="PUT" name="_method">
          <div class="form-group">
            <label for="nama_produk">Nama Produk:</label>
            <input type="text" value="{{old('nama_produk') ? old('nama_produk') : $produk->nama_produk}}" class="form-control {{$errors->first('nama_produk') ? "is-invalid" : ""}}" id="nama_produk" placeholder="Enter Nama Produk" name="nama_produk">
          </div> 
          <div class="form-group">
            <label for="harga">Harga:</label>
            <input type="text" value="{{old('harga') ? old('harga') : $produk->harga}}" class="form-control" id="harga" placeholder="Enter Harga" name="harga">
          </div>  
          <div class="form-group">
            <label for="stok">Stok:</label>
            <input type="text" value="{{old('harga') ? old('harga') : $produk->harga}}" class="form-control" id="stok" placeholder="Enter Stok" name="stok">
          </div>  
          <div class="form-group">
            <label for="image">Gambar:</label>
            <input type="file" class="form-control" id="image"  name="image">
          </div> 
          {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
          <input  class="btn btn-primary"  type="submit"  value="Save"/>
        </form>
      </div>

      @endsection