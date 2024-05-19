@extends('layouts.auth')
@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-lg-5">

            @if(session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
            @endif

            @if(session()->has('loginError'))
            <div class="alert alert-danger" role="alert">
                {{ session('loginError') }}
            </div>
            @endif

            <main class="form-signin w-100 m-auto">
                <div class="card" style="height: 400px; width: 450px; margin: 100px auto;">
                    <div class="card-body">
                        <form action="/login" method="POST">
                            @csrf
                            <h1 class="h3 mt-3 mb-4 fw-normal text-center">Login</h1>

                            <div class="form-floating">
                                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" autofocus required value="{{ old('username') }}">
                                <label for="username">Username</label>
                                @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-floating mt-2">
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                                <label for="password">Password</label>
                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <button class="prime w-100 btn btn-lg mt-4" type="submit">Login</button>
                        </form>
                        <small class="d-block text-center mt-2">Belum punya akun? <a href="/register">Buat akun!</a></small>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>
@endsection