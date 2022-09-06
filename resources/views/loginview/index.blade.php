@extends('layouts.app')

@section('content')

  <div class="conatiner mt-5">
    <div class="row">
    <div class="row mb-5">
        <div class="col-lg-6">
          @if ($message = Session::get('success'))
          <div class="alert alert-success mb-4">
            <p class="mb-0">{{ $message }}</p>
          </div>
          @endif
        </div>
        <div class="col-lg-6 text-end">
          <a class="btn btn-primary" href="{{ route('registercreate') }}">Register</a> 
        </div>
      </div>
      <div class="col-lg-6 offset-lg-3">
      <form  action="{{ route('loginuser') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Email</label>
          <input type="text" class="form-control" id="email" name="email">
          @if ($errors->has('email'))
         
          <span style="color:red;">{{ $errors->first('email') }}</span>
          
          @endif
        </div>
        <div class="mb-3">
          <label for="desc" class="form-label">Password</label>
          <input type="text" class="form-control" id="password" name="password">
          @if ($errors->has('password'))
         
          <span style="color:red;">{{ $errors->first('password') }}</span>
         
          @endif
        </div>
        <button type="submit" class="btn btn-primary w-100">login</button>
      </form>
      </div>
    </div>
  </div>

@endsection