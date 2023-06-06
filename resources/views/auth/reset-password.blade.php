@extends('layouts.app')

@section('title', 'Reset Password')

@section('content')

<div class="row">
    <div class="col-md-4 mx-auto">
        <div class="card mt-3 mb-5 bg-warning-subtle">
  <h5 class="card-header text-center">Register</h5>
        <div class="card-body">
            <form method="POSt" action="{{route('password.update')}}">
                @csrf
                <input type="hidden" name="token" value="{{$request->route('token')}}">
                @if (session()->has('error_message'))
                <div class="alert alert-danger" id="error_message">{{session()->get('error_message')}}</div>
                @endif
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="{{old('email', $request->email)}}">
                  @error('email')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
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
                <button type="submit" class="btn btn-warning">Reset Password</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection