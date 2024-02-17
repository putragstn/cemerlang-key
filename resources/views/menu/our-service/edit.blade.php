@extends('dashboard.layouts.main')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Layanan Kami</h1>
    </div>

    <a href="{{ route('layanan-kami.index') }}" class="btn btn-primary mb-3">Kembali</a>

    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('layanan-kami.update', $service->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="row">
            <div class="col-xs-8 col-sm-8 col-md-8 mb-3">
                <div class="form-group">
                    <strong>Jenis Layanan:</strong>
                    <input type="text" name="jenis_layanan" class="form-control" value="{{ $service->jenis_layanan }}">
                </div>
            </div>

            <div class="col-xs-8 col-sm-8 col-md-8 mb-3">
                <div class="form-group">
                    <strong>Deskripsi:</strong>
                    <input type="text" name="deskripsi" class="form-control" value="{{ $service->deskripsi }}">
                </div>
            </div>

            <div class="col-xs-8 col-sm-8 col-md-8 text-center">
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </div>
        </div>
        
    </form>

</div>
<!-- /.container-fluid -->
@endsection