@extends('layouts.app')

@section('content') 

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Arif Suryanto R Lapengo - 081244477250') }}</div>
    
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item"><a href="{{ url('/soalsatu') }}">Soal 1</a></li>
                            <li class="list-group-item"><a href="{{ url('/soaldua') }}">Soal 2</a></li>
                            <li class="list-group-item"> <a href="{{ url('/users') }}">Soal 3</a> </li>
                            <li class="list-group-item"><a href="{{ url('/produk') }}">Soal 4 & 5</a></li>
                            {{-- <li class="list-group-item"><a href="{{ url('/produk') }}">Soal 5</a> </li> --}}
                          </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>    

@endsection
