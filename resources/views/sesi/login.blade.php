@extends('sesi.source')
@section('title', "Login")

@section('konten')
<div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
<div class="col-lg-6">
    <div class="p-5">
        <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Selamat Datang!</h1>
        </div>
        @include('message.pesan')
        <form action="{{ route('login.in') }}" method="POST" class="user">
            @csrf
            <div class="form-group">
                <input type="text" name="email" class="form-control form-control-user @error('email') is-invalid @enderror" value="{{ old('email') }}"
                    id="email" aria-describedby="emailHelp"
                    placeholder="Masukkan Alamat Email...">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control form-control-user @error('password') @enderror"
                    id="password" placeholder="Masukkan Password...">
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
            </div>
            <div class="form-group">
                <div class="custom-control custom-checkbox small">
                    <input name="remember" type="checkbox" class="custom-control-input" id="customCheck">
                    <label class="custom-control-label" for="customCheck">Remember
                        Me</label>
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">Login</button>
            <hr>
        </form>
        <hr>
        <div class="text-center">
            <a class="small" href="forgot-password.html">Forgot Password?</a>
        </div>
        <div class="text-center">
            <a class="small" href="{{ route('register') }}">Create an Account!</a>
        </div>
    </div>
</div>
@endsection