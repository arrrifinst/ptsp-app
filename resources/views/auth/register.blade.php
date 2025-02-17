@extends('layouts.auth')
@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-lg-5">
            <main class="form-signin w-100 m-auto">
                <div class="card" style="margin: 100px auto;">
                    <div class="card-body">
                        <form action="/register" method="POST">
                            @csrf
                            <h1 class="h3 mt-3 mb-4 fw-normal text-center">Registrasi</h1>

                            <div class="form-floating">
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nama" autofocus value="{{ old('name') }}">
                                <label for="name">Nama</label>
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-floating mt-2">
                                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Nama" value="{{ old('username') }}">
                                <label for="username">Username</label>
                                @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-floating mt-2">
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" value="{{ old('email') }}">
                                <label for="email">Email address</label>
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-floating mt-2">
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password">
                                <label for="password">Password</label>
                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <button class="prime w-100 btn btn-lg mt-2" type="submit">Register</button>
                        </form>
                        <small class="d-block text-center mt-2 mb-3">Sudah punya akun? <a href="/login">Login!</a></small>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>
@endsection