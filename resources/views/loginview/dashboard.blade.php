@extends('layouts.app')

@section('content')

  <div class="conatiner mt-5">
    <div class="row">
    <div class="row mb-5">
        <div class="col-lg-6">
          @if ($message = Session::get('success'))
          <div class="alert alert-danger mb-4">
            <p class="mb-0">{{ $message }}</p>
          </div>
          @endif
        </div>
        <div class="col-lg-6 text-end">
        <form action="{{ route('logout') }}" method="post">
       @csrf
       <button class ="btn btn-primary" type="submit">Logout</button>
     </form>
        </div>
      </div>
      <div class="col-lg-6 offset-lg-3">
     <h1>Welcome sivakumar</h1>
      </div>
    </div>
  </div>

@endsection