@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    @if(session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Pengirim</th>
                            <th>Email</th>
                            <th>Judul</th>
                            <th>Pesan</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $dataPesan)
                        <tr>
                            <td>{{ $dataPesan->id }}</td>
                            <td>{{ $dataPesan->nama }}</td>
                            <td>{{ $dataPesan->email }}</td>
                            <td>{{ $dataPesan->judul }}</td>
                            <td>{{ $dataPesan->pesan }}</td>
                            <td>{{ $dataPesan->created_at }}</td>
                            <td align="center">
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#ModalHapusPesan{{$dataPesan->id}}">hapus</button>
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
@foreach($data as $dataPesan)
<div class="modal fade" id="ModalHapusPesan{{$dataPesan->id}}" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Hapus Data</h4>
            </div>
            <div class="modal-body">
                <strong>Ingin menghapus data ini?</strong>
            </div>
            <div class="modal-footer">
                <a href="{{ $dataPesan->id.'/delete-pesan' }}">
                    <button class="btn btn-danger btn-sm">hapus</button>
                </a>
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection