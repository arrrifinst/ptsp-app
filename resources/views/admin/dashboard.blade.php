@extends('layouts.admin')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->

    <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4"> -->
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    <!-- </div> -->

    <div class="card mb-3">
        <div class="card-body">
            <h1 class="h3 mb-0 text-gray-800">Selamat datang di halaman Admin.</h1>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Pelayanan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlah_layanan }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-book fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Pesan Masuk</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlah_pesan }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Survei Kepuasan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlah_survei }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-grin fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Users</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlah_user }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection