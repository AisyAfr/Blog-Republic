@extends('layouts.app')

@section('title', 'Register')

@section('content')

<div class="row">
    <div class="col-md-4 mx-auto">
        <div class="card mt-3 mb-5 bg-warning-subtle">
  <h5 class="card-header text-center">Register</h5>
        <div class="card-body">
            <form method="POSt" action="{{route('register')}}">
                @csrf
                @if (session()->has('error_message'))
                <div class="alert alert-danger" id="error_message">{{session()->get('error_message')}}</div>
                @endif
                <div class="mb-3">
                  <label for="name" class="form-label">Username</label>
                  <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                  @if($errors->has('name'))
                  <small class="text-danger">{{$errors->first('name')}}</small>
                  @endif
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{old('email')}}">
                  @if($errors->has('email'))
                  <small class="text-danger">{{$errors->first('email')}}</small>
                  @endif
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                  @if($errors->has('password'))
                  <small class="text-danger">{{$errors->first('password')}}</small>
                  @endif
                </div>
                <div class="mb-3">
                  <label for="password_confirmation" class="form-label">Confirm Password</label>
                  <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                </div>
                <div class="text-center">
                <button type="submit" class="btn btn-warning">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection