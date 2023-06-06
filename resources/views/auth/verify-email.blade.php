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
  <h5 class="card-header text-center">Verify Email</h5>
        <div class="card-body">
            Before Proceeding, please check your email for a verification link or <form class="d-inline" action="{{route('verification.send')}}" method="post">
            @csrf
            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">
                {{
                    __('click here to resend verification email')
                }}
            </button>
            </form>
            @if(session('status'))
            <div class="alert alert-success">
                <small>Email Verification Has Sended</small>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection