@extends('layouts.app')
@section("title") Sign In @stop
@section('content')
    <div class="login">
        <a href="{{ route('index') }}">
            <img src="{{ asset('images/logos/logo.png') }}" class="brand-logo d-block mx-auto mb-3 w-50" alt="">
        </a>
        <div class="card">
            <div class="card-body p-5">
                <h2 class="text-center fw-bold">Sing In</h2>
                <p class="text-black-50 text-center small">
                    Doesn’t have an account yet? <a href="{{ route('register') }}">Sign Up here</a>
                </p>
                <a href="#" class="btn btn-lg w-100 btn-outline-secondary">Sign In with google</a>

                <hr>
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="mb-4">
                        <label class="form-label text-start">
                            <i class="fas fa-envelope fa-fw"></i>
                            Username
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

                    <div class="mb-2">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label">Remember Me</label>
                        </div>
                    </div>

                    <button class="btn btn-primary w-100 btn-lg">Sign In</button>
                </form>


            </div>
        </div>
    </div>
@endsection
