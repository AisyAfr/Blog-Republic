@extends('layouts.app')

@section('title', 'Login')

@section('content')

<div class="row">
  @if (session()->has('error_message'))
                <div class="position-relative">
                        <div class="alert alert-danger alert-dismissible fade show js-alert position-absolute top-0 start-50 translate-middle" style="z-index: 6;" role="alert">
                            {{ session()->get('error_message') }}
                        </div>
                </div>
                    @elseif(session()->has('logout_message'))
                    <div class="position-relative">
                        <div class="alert alert-danger alert-dismissible fade show js-alert position-absolute top-0 start-50 translate-middle" style="z-index: 6;" role="alert">
                            {{ session()->get('logout_message') }}
                        </div>
                    </div>
                @endif
    <div class="col-md-4 mx-auto">
        <div class="card mt-5 mb-5 bg-info-subtle">
  <h5 class="card-header text-center">Forgot Password?</h5>
        <div class="card-body">
            @if(session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
            @endif
            <form method="POSt" action="{{route('password.email')}}">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Your Email Address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
                  @if($errors->has('email'))
                  <small class="text-danger">{{$errors->first('email')}}</small>
                  @endif
                </div>
                <div class="text-center">
                <button type="submit" class="btn btn-primary">Send Reset Link</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection