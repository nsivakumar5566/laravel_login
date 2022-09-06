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
       
      </div>
      <div class="col-lg-6 offset-lg-3">
      <form  action="{{route('register')}}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name">
          @if ($errors->has('name'))    
          <span style="color:red;">{{ $errors->first('name') }}</span>
          @endif
        </div>
        <div class="mb-3">
          <label for="desc" class="form-label">Email</label>
          <input type="text" class="form-control" id="desc" name="email">
          @if ($errors->has('email'))    
          <span style="color:red;">{{ $errors->first('email') }}</span> 
          @endif
        </div>
        <div class="mb-3">
          <label for="desc" class="form-label">Password</label>
          <input type="text" class="form-control" id="desc" name="password">
          @if ($errors->has('password'))        
          <span style="color:red;">{{ $errors->first('password') }}</span>
          @endif
        </div>
        <button type="submit" class="btn btn-primary w-100">Register</button>
      </form>
      </div>
    </div>
  </div>

@endsection