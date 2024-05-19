@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    @if(session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="/tambah" class="btn btn-primary btn-sm btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Tambah data</span>
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Pelayanan</th>
                            <th>Pemohon</th>
                            <th>Narahubung</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Berkas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $dataLayanan)
                        <tr>
                            <td>{{ $dataLayanan->id }}</td>
                            <td>{{ $dataLayanan->jenis }}</td>
                            <td>{{ $dataLayanan->nama }}</td>
                            <td>{{ $dataLayanan->telepon }}</td>
                            <td>{{ $dataLayanan->created_at }}</td>
                            <td align="center"><small>{{ $dataLayanan->status }}</small></td>
                            <td align="center">
                                <a target="_blank" href="{{$dataLayanan->file}}" class="btn btn-secondary btn-sm btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-file-pdf"></i>
                                    </span>
                                    <span class="text">Buka</span>
                                </a>
                            </td>
                            <td align="center">
                                <div class="btn-group btn-group-sm">
                                    <!-- <a href="{{ $dataLayanan->id.'/edit' }}" class="btn btn-warning">edit</a> -->
                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#ModalEdit{{$dataLayanan->id}}">edit</button>
                                    <!-- <a href="#" class="btn btn-outline-secondary">hapus</a> -->
                                    <!-- <a class="btn btn-outline-secondary" href="{{ $dataLayanan->id.'/delete' }}">
                                        <button class="btn btn-outline-secondary btn-sm">hapus</button>
                                    </a> -->
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#ModalHapus{{$dataLayanan->id}}">hapus</button>
                                </div>
                            </td>
                        </tr>
                        @endforeach

                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



<!-- Modal Hapus-->
@foreach($data as $dataLayanan)
<div class="modal fade" id="ModalHapus{{$dataLayanan->id}}" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Hapus Data</h4>
            </div>
            <div class="modal-body">
                <strong>Ingin menghapus data ini?</strong>
            </div>
            <div class="modal-footer">
                <a href="{{ $dataLayanan->id.'/delete-layanan' }}">
                    <button class="btn btn-danger btn-sm">hapus</button>
                </a>
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>
@endforeach

<!-- Modal Edit -->
@foreach($data as $dataLayanan)
<div class="modal fade" id="ModalEdit{{$dataLayanan->id}}" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Data</h4>
            </div>
            <div class="modal-body">
                <form action="/update/{{ $dataLayanan->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Pemohon:</label>
                        <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama / Instansi Anda" autofocus value="{{ $dataLayanan->nama }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Alamat Email" value="{{ $dataLayanan->email }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="telepon" class="form-label">No. Telepon:</label>
                        <input type="text" id="telepon" name="telepon" class="form-control" placeholder="Narahubung" value="{{ $dataLayanan->telepon }}" required>
                    </div>
                    <!-- <div class="mb-3">
                        <label for="jenis" class="form-label">Jenis Layanan:</label>
                        <select class="form-select" id="jenis" name="jenis" required>
                            <option value="0" selected disabled>--</option>
                            <option value="Narasumber / Pemateri / Penceramah / Undangan">Narasumber / Pemateri / Penceramah / Undangan</option>
                            <option value="Rohaniwan">Rohaniwan</option>
                            <option value="Pembaca Doa">Pembaca Doa</option>
                            <option value="Pengukuran & Kalibrasi Arah Kiblat">Pengukuran & Kalibrasi Arah Kiblat</option>
                            <option value="Rekomendasi / Surat Keterangan">Rekomendasi / Surat Keterangan</option>
                        </select>
                    </div> -->
                    <div class="mb-3">
                        <label for="jenis" class="form-label">Jenis Layanan:</label>
                        <select class="form-select @error('jenis') is-invalid @enderror" id="jenis" name="jenis" required>
                            <option value="0" selected disabled>--</option>
                            <option value="Narasumber / Pemateri / Penceramah / Undangan"{{ $dataLayanan->jenis =="Narasumber / Pemateri / Penceramah / Undangan" ? 'selected' : '' }}>Narasumber / Pemateri / Penceramah / Undangan</option>
                            <option value="Rohaniwan"{{ $dataLayanan->jenis =="Rohaniwan" ? 'selected' : '' }}>Rohaniwan</option>
                            <option value="Pembaca Doa"{{ $dataLayanan->jenis =="Pembaca Doa" ? 'selected' : '' }}>Pembaca Doa</option>
                            <option value="Pengukuran & Kalibrasi Arah Kiblat"{{ $dataLayanan->jenis =="Pengukuran & Kalibrasi Arah Kiblat" ? 'selected' : '' }}>Pengukuran & Kalibrasi Arah Kiblat</option>
                            <option value="Rekomendasi / Surat Keterangan"{{ $dataLayanan->jenis =="Rekomendasi / Surat Keterangan" ? 'selected' : '' }}>Rekomendasi / Surat Keterangan</option>
                        </select>
                        @error('jenis')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="file" class="form-label">Berkas Persyaratan</label>
                        <!-- <input type="text" id="file" name="file" class="form-control" value="{{$dataLayanan->file}}" disabled> -->
                        <input type="file" id="file" name="file" class="form-control" value="{{$dataLayanan->file}}">
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status:</label>
                        <select class="form-select" id="status" name="status" required>
                            <option value="Baru"{{ $dataLayanan->status =="Baru" ? 'selected' : '' }}>Baru</option>
                            <option value="Diproses"{{ $dataLayanan->status =="Diproses" ? 'selected' : '' }}>Diproses</option>
                            <option value="Selesai"{{ $dataLayanan->status =="Selesai" ? 'selected' : '' }}>Selesai</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Update</button>
                </form>
            </div>
            <div class="modal-footer">
                
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>
@endforeach




@endsection