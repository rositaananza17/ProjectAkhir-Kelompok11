@extends('layouts.app')

@section('content')
<div class="container-fluid vh-100 overflow-auto">
    <div class="row vh-100">
        <div class="col-lg-6 bg-gray p-5 text-center">
            <h4 class="text-center fw-bolder fs-2">Already have an account?</h4>
            <p class="mb-3 fs-7">Log in to your account now.</p>
            <a href="{{ route('login') }}">
                <button class="btn fw-bold mb-5 btn-outline-success px-4 rounded-pill">Log In</button>
            </a>
            <div class="img-cover p-4">
                <img src="{{ asset('template2/assets/images/loginbg.svg') }}" alt="">
            </div>
        </div>
        <div class="col-lg-6 p vh-100">
            <div class="row d-flex vh-100">
                <div class="col-md-8 p-4 ikigui m-auto text-center align-items-center">
                    <h4 class="text-center fw-bolder mb-4 fs-2">Register</h4>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="input-group mb-4">
                            <span class="input-group-text border-end-0 inbg" id="basic-addon1"><i class="bi bi-person"></i></span>
                            <input id="name" type="text" class="form-control ps-2 border-start-0 fs-7 inbg form-control-lg mb-0 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter Full Name" aria-label="Name" aria-describedby="basic-addon1">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="input-group mb-4">
                            <span class="input-group-text border-end-0 inbg" id="basic-addon1"><i class="bi bi-calendar"></i></span>
                            <input id="ttl" type="date" class="form-control ps-2 border-start-0 fs-7 inbg form-control-lg mb-0 @error('ttl') is-invalid @enderror" name="ttl" value="{{ old('ttl') }}" required placeholder="Tanggal Lahir" aria-label="Tanggal Lahir" aria-describedby="basic-addon1">
                            @error('ttl')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="input-group mb-4">
                            <span class="input-group-text border-end-0 inbg" id="basic-addon1"><i class="bi bi-gender-ambiguous"></i></span>
                            <input id="gender" type="text" class="form-control ps-2 border-start-0 fs-7 inbg form-control-lg mb-0 @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" required placeholder="Gender" aria-label="Gender" aria-describedby="basic-addon1">
                            @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="input-group mb-4">
                            <span class="input-group-text border-end-0 inbg" id="basic-addon1"><i class="bi bi-house"></i></span>
                            <input id="alamat" type="text" class="form-control ps-2 border-start-0 fs-7 inbg form-control-lg mb-0 @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required placeholder="Alamat" aria-label="Alamat" aria-describedby="basic-addon1">
                            @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="input-group mb-4">
                            <span class="input-group-text border-end-0 inbg" id="basic-addon1"><i class="bi bi-envelope"></i></span>
                            <input id="email" type="email" class="form-control ps-2 border-start-0 fs-7 inbg form-control-lg mb-0 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Email Address" aria-label="Email" aria-describedby="basic-addon1">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="input-group mb-4">
                            <span class="input-group-text border-end-0 inbg" id="basic-addon1"><i class="bi bi-lock"></i></span>
                            <input id="password" type="password" class="form-control ps-2 fs-7 border-start-0 form-control-lg inbg mb-0 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter Password" aria-label="Password" aria-describedby="basic-addon1">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="input-group mb-4">
                            <span class="input-group-text border-end-0 inbg" id="basic-addon1"><i class="bi bi-lock"></i></span>
                            <input id="password-confirm" type="password" class="form-control ps-2 fs-7 border-start-0 form-control-lg inbg mb-0" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" aria-label="Password Confirmation" aria-describedby="basic-addon1">
                        </div>

                        <button class="btn btn-lg fw-bold fs-7 btn-success w-100" type="submit">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
