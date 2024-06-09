@extends('layouts.app')

@section('content')
<div class="container-fluid vh-100 overflow-auto">
    <div class="row vh-100">
        <div class="col-lg-6 bg-gray p-5 text-center">
            <h4 class="text-center fw-bolder fs-2">Register</h4>
            <p class="mb-3 fs-7">Register Now and Feel the New Digital World</p>
            <a href="{{ route('register') }}">
                <button class="btn fw-bold mb-5 btn-outline-success px-4 rounded-pill">Sign Up</button>
            </a>
            <div class="img-cover p-4">
                <img src="{{ asset('/template2/assets/images/loginbg.svg') }}" alt="">
            </div>
        </div>
        <div class="col-lg-6 p vh-100">
            <div class="row d-flex vh-100">
                <div class="col-md-8 p-4 ikigui m-auto text-center align-items-center">
                    <h4 class="text-center fw-bolder mb-4 fs-2">Login</h4>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="input-group mb-4">
                            <span class="input-group-text border-end-0 inbg" id="basic-addon1"><i class="bi bi-person"></i></span>
                            <input id="email" type="email" class="form-control ps-2 border-start-0 fs-7 inbg form-control-lg mb-0 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter Username" aria-label="Username" aria-describedby="basic-addon1">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-group mb-4">
                            <span class="input-group-text border-end-0 inbg" id="basic-addon1"><i class="bi bi-lock"></i></span>
                            <input id="password" type="password" class="form-control ps-2 fs-7 border-start-0 form-control-lg inbg mb-0 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Password" aria-label="Password" aria-describedby="basic-addon1">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-check mb-4 text-start">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                        <button class="btn btn-lg fw-bold fs-7 btn-success w-100" type="submit">{{ __('Login') }}</button>
                        <br>
                        
                        
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </form>
                    <a href="index">
                        <button class="btn btn-lg fw-bold fs-7 btn-success w-100" type="submit">Tanpa Login</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
