@extends('layouts.app')

@section('content') 

<div class="container">
    <h1>Data Users</h1>
    <hr>

    

    @if(session('status1'))  
        <div class="alert alert-info alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong> {{session('status')}}
            </div>
    @endif 

    <a class="btn btn-info text-white btn-sm" href="{{route('users.create')}}">Tambah User</a>
    {{-- <a class="btn btn-warning text-white btn-sm" href="{{'/'}}">Back Menu Utama</a> --}}
    {{-- <a class="btn btn-primary text-white btn-sm" href="{{'login'}}">Login</a> --}}

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
</div>
    @endsection