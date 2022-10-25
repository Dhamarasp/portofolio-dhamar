@extends('sesi.source')
@section('title', "Register")

@section('konten')
<div class="col-lg-6 d-none d-lg-block bg-register-image"></div>
<div class="col-lg-6">
    <div class="p-5">
        <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Silahkan Membuat Akun!</h1>
        </div>
        <form action="{{ route('register.store') }}" method="POST" class="user">
            @csrf
            <div class="form-group">
                <input type="text" name="name" class="form-control form-control-user @error('name') is-invalid @enderror"
                    id="exampleInputName" aria-describedby="nameHelp"
                    placeholder="Masukkan Nama Anda...">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
            </div>
            <div class="form-group">
                <input type="text" name="email" class="form-control form-control-user @error('email') is-invalid @enderror"
                    id="exampleInputEmail" aria-describedby="emailHelp"
                    placeholder="Masukkan Alamat Email...">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control form-control-user @error('password') is-invalid @enderror"
                    id="exampleInputPassword" placeholder="Masukkan Password...">
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
            </div>
            <div class="form-group">
                <div class="custom-control custom-checkbox small">
                    <input type="checkbox" class="custom-control-input" id="customCheck">
                    <label class="custom-control-label" for="customCheck">Remember
                        Me</label>
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">Daftar</button> 
        </form>
        <hr>
        <div class="text-center">
            <a class="small" href="">Forgot Password?</a>
        </div>
        <div class="text-center">
            <a class="small" href="{{ route('login') }}">Already Have Account ?</a>
        </div>
    </div>
</div>
@endsection