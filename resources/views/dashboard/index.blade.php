@extends('dashboard.layouts.main')

@section('container')
    

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
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
                                Layanan Kami</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ count($totalOurServices) }} Layanan</div>
                        </div>
                        <div class="col-auto">
                            {{-- <i class="fas fa-calendar fa-2x text-gray-300"></i> --}}
                            <i class="fas fa-wrench fa-2x text-gray-300"></i>
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
                                Layanan Lainnya</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ count($totalOtherServices) }} Layanan</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-wrench fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Video Galeri</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ count($totalVideos) }} Video</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-video fa-2x text-gray-300"></i>
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
                                Total Gambar Galeri</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ count($totalImages) }} Gambar</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-image fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->

    <hr>

    <div class="row text-center justify-content-center mb-3">
        <div class="col-lg-6 col-sm-12">

            @if ($message = Session::get('success'))
                <div class="alert alert-success mb-3 mt-3">
                    <p>{{ $message }}</p>
                </div>
            @endif

            @if ($message = Session::get('error'))
                <div class="alert alert-danger mb-3 mt-3">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $slogan->judul }}</h5>
                    <p class="card-text">{{ $slogan->deskripsi }}</p>
                    <a href="/dashboard/ubah-slogan" class="btn btn-primary mb-1">Ubah</a>
                    <div>
                        <a href="/" target="blank" class="btn btn-primary">Link Website</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->
@endsection