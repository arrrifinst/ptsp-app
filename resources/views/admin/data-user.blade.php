@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-body">
        <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $dataUser)
                        <tr>
                            <td>{{ $dataUser->id }}</td>
                            <td>{{ $dataUser->name }}</td>
                            <td>{{ $dataUser->username }}</td>
                            <td>{{ $dataUser->email }}</td>
                            <td>{{ $dataUser->created_at }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection