@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <a href="/data-layanan">
        << Kembali</a>
            <div class="card">
                <div class="card-body">
                    <form action="/save" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Pemohon:</label>
                            <input type="text" id="nama" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Nama / Instansi Anda" autofocus value="{{ old('nama') }}">
                            @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Alamat Email" value="{{ old('email') }}">
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="telepon" class="form-label">No. Telepon:</label>
                            <input type="text" id="telepon" name="telepon" class="form-control @error('telepon') is-invalid @enderror" placeholder="Narahubung" value="{{ old('telepon') }}">
                            @error('telepon')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="jenis" class="form-label">Jenis Layanan:</label>
                            <select class="form-select @error('jenis') is-invalid @enderror" id="jenis" name="jenis" required>
                                <option value="0" selected disabled>--</option>
                                <option value="Narasumber / Pemateri / Penceramah / Undangan">Narasumber / Pemateri / Penceramah / Undangan</option>
                                <option value="Rohaniwan">Rohaniwan</option>
                                <option value="Pembaca Doa">Pembaca Doa</option>
                                <option value="Pengukuran & Kalibrasi Arah Kiblat">Pengukuran & Kalibrasi Arah Kiblat</option>
                                <option value="Rekomendasi / Surat Keterangan">Rekomendasi / Surat Keterangan</option>
                            </select>
                            @error('jenis')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="file" class="form-label">Berkas Persyaratan</label>
                            <input type="file" id="file" name="file" class="form-control @error('file') is-invalid @enderror" value="{{ old('jenis') }}">
                            @error('file')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
</div>
@endsection