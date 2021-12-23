@extends('layouts.app')
@section("title") Sign Up @stop
@section('content')
    <div class="login">
        <a href="{{ route('index') }}">
            <img src="{{ asset('images/logos/logo.png') }}" class="brand-logo d-block mx-auto mb-3 w-50" alt="">
        </a>
        <div class="card">
            <div class="card-body p-5">
                <h2 class="text-center fw-bold">Account Register</h2>
                <p class="text-black-50 text-center small">
                    Do U have an account? <a href="{{ route('login') }}">Sign In here</a>
                </p>
                <a href="#" class="btn btn-lg w-100 btn-outline-secondary">Sign In with google</a>

                <hr>
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="mb-4">
                        <label class="form-label text-start">
                            <i class="fas fa-user fa-fw"></i>
                            Your Name
                        </label>
                        <input type="text" value="{{ old('name') }}" name="name" class="form-control form-control-lg @error('name') is-invalid @enderror">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="form-label text-start">
                            <i class="fas fa-envelope fa-fw"></i>
                            Email
                        </label>
                        <input type="text" value="{{ old('email') }}" name="email" class="form-control form-control-lg @error('email') is-invalid @enderror">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="form-label text-start">
                            <i class="fas fa-lock fa-fw"></i>
                            Password
                        </label>
                        <input type="password" name="password" class="form-control form-control-lg @error('password') is-invalid @enderror">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="form-label text-start">
                            <i class="fas fa-lock fa-fw"></i>
                            Confirm Password
                        </label>
                        <input type="password" name="password_confirmation" class="form-control form-control-lg">
                    </div>
                    <div class="mb-2">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label">Remember Me</label>
                        </div>
                    </div>

                    <button class="btn btn-primary w-100 btn-lg">Sign Up</button>
                </form>


            </div>
        </div>
    </div>
@endsection
