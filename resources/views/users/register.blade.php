@extends('layouts.app')

@section('content') 
    <div class="container">
        <h2>Registrasi User</h2>
        <hr>

        <a class="btn btn-info text-white btn-sm" href="{{route('users.index')}}">Lihat Data Users</a> <br><br>


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


        <form action="{{route('users.store')}}" method="POST" enctype="multipart/form-data">
          
          @csrf

          <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" value="{{old('email')}}"  class="form-control" id="email" placeholder="Enter email" name="email">
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" value="{{old('password')}}"  class="form-control" id="password" placeholder="Enter password" name="password">
          </div> 
          <div class="form-group">
            <label for="password2">Re-Enter Password:</label>
            <input type="password" class="form-control" id="password2" placeholder="Re-Enter Password" name="password2">
          </div> 
          <div class="form-group">
            <label for="nohp">Phone Number:</label>
            <input type="text" value="{{old('nohp')}}"  class="form-control" id="nohp" placeholder="Enter Phone Number" name="nohp">
          </div> 
          <div class="form-group">
            <label for="alamat">Place:</label> 
            <textarea name="alamat" class="form-control is-invalid" id="alamat" placeholder="Enter Your Place"></textarea>
          </div> 
          {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
          <input  class="btn btn-primary"  type="submit"  value="Save"/>
        </form>
      </div>
      
      @endsection