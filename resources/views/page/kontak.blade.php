@extends('layouts.web')
@section('content')
<div class="container">
    
    <section class="contact" id="contact">

        <h1 class="heading"> Hubungi <span> Kami </span> </h1>

        <div class="icons-container">
            <div class="icons">
                <i class="fas fa-envelope"></i>
                <h3>Email</h3>
                <p>ptsp@kemenag.go.id</p>
            </div>
            <div class="icons">
                <i class="fas fa-phone"></i>
                <h3>Call Center</h3>
                <p>(0542) 424558</p>
            </div>
            <div class="icons">
                <i class="fas fa-map-marker-alt"></i>
                <h3>Alamat</h3>
                <p>Jl. D.I Panjaitan No.1, Gn. Samarinda, Kec. Balikpapan Utara, Kota Balikpapan, Kalimantan Timur 76124</p>
            </div>
        </div>

        <div class="icons-container">
            <div class="icons">
                @if(session()->has('pesan-success'))
                <div class="alert alert-success" role="alert">
                    {{ session('pesan-success') }}
                </div>
                @endif
                <i class="fas fa-paper-plane"></i>
                <h3>Kirim Pesan</h3>
                <form action="/kirim-pesan" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-2 mb-3">
                        <div class="col-6">
                            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Nama anda" value="{{ old('nama') }}">
                            @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-6">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email anda" value="{{ old('email') }}">
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" placeholder="Judul Pesan" value="{{ old('judul') }}">
                        @error('judul')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control @error('pesan') is-invalid @enderror" name="pesan" rows="3" placeholder="Isi Pesan" value="{{ old('pesan') }}"></textarea>
                        @error('pesan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="prime btn">Kirim</button>
                </form>
            </div>

            <div class="icons">
                @if(session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
                @endif
                <i class="fas fa-grin"></i>
                <h3>Survei Kepuasan</h3>
                <form action="/kirim-survei" method="POST">
                    @csrf
                    <div class="mb-3">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Nama" value="{{ old('name') }}">
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input @error('kepuasan') is-invalid @enderror" type="radio" name="kepuasan" value="Sangat Puas">
                            <label class="form-check-label" for="kepuasan">
                                Sangat Puas
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input @error('kepuasan') is-invalid @enderror" type="radio" name="kepuasan" value="Puas">
                            <label class="form-check-label" for="kepuasan">
                                Puas
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input @error('kepuasan') is-invalid @enderror" type="radio" name="kepuasan" value="Tidak Puas">
                            <label class="form-check-label" for="kepuasan">
                                Tidak Puas
                            </label>
                        </div>
                        @error('kepuasan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control @error('keperluan') is-invalid @enderror" name="keperluan" placeholder="Keperluan Pelayanan">
                        @error('keperluan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control @error('keperluan') is-invalid @enderror" name="kritik" placeholder="Kritik & Saran">
                        @error('kritik')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="prime btn">Kirim</button>
                </form>
            </div>
        </div>

        <div class="icons-container">
            <div class="icons">
                <iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=kantor kementerian agama kota balikpapan&amp;t=h&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>   
            </div>
        </div>

    </section>

</div>
@endsection