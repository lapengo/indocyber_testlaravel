@extends('layouts.app')

@section('content') 
    <div class="container">


    <h1>Data Produk</h1>
    <hr>

    <a class="btn btn-info text-white btn-sm" href="{{route('produk.create')}}">Tambah Produk</a>
    {{-- <a class="btn btn-warning text-white btn-sm" href="{{'/'}}">Back Menu Utama</a> --}}

    <br><br>

    @if(session('status')) 
        <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Success!</strong> {{session('status')}}
          </div>
    @endif 

    @if(session('status1'))  
        <div class="alert alert-info alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong> {{session('status')}}
            </div>
    @endif 

    <table class="table table-striped table-dark">
        <thead>            
        <tr> 
            <th>No. </th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Image</th>
            <th>Action</th>
        </tr> 
        </thead>
        <tbody>
            @foreach ($data as $row)          
            <tr> 
                <td>{{$loop->iteration}}</td>
                <td>{{$row->nama_produk}}</td>
                <td>Rp. {{number_format($row->harga, 0, ',', '.')}}</td>
                <td>{{$row->stok}}</td>
                <td>
                    @if(isset($row->image))
                        <img src="{{ URL::to('/') }}/produk-image/{{$row->image}}" class="img-fluid" alt="Responsive image">
                    @else
                        Tidak Tersedia
                    @endif
                </td>
                <td>
                    
                    <a 
                    href="{{route('produk.edit', ['id' => $row->id])}}"
                    class="btn btn-info btn-sm"> Edit </a>
                    
                    <a 
                    href="{{route('produk.show', ['id' => $row->id])}}"
                    class="btn btn-primary btn-sm"> Show </a>
                    
                    <form 
                    class="d-inline"
                    action="{{route('produk.destroy', ['id' => $row->id])}}"
                    method="POST"
                    onsubmit="return confirm('apakah anda yakin ingin menghapus produk tersebut!')"
                    >
                    
                    @csrf 

                    <input 
                        type="hidden" 
                        value="DELETE" 
                        name="_method">

                    <input 
                        type="submit" 
                        class="btn btn-danger btn-sm" 
                        value="Trash">
                    
                    </form>


                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>

    @endsection