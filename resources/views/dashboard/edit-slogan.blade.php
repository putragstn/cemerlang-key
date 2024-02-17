@extends('dashboard.layouts.main')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Slogan</h1>
    </div>

    <a href="/dashboard" class="btn btn-primary mb-3">Kembali</a>

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

    <form action="/dashboard/ubah-slogan" method="POST">
        @csrf
        @method('PUT')
        
        <div class="row">
            
            <input type="hidden" name="id" value="{{ $slogan->id }}">

            <div class="col-xs-8 col-sm-8 col-md-8 mb-3">
                <div class="form-group">
                    <strong>Judul Slogan:</strong>
                    <input type="text" name="judul" class="form-control" value="{{ $slogan->judul }}">
                </div>
            </div>

            <div class="col-xs-8 col-sm-8 col-md-8 mb-3">
                <div class="form-group">
                    <strong>Deskripsi:</strong>
                    <input type="text" name="deskripsi" class="form-control" value="{{ $slogan->deskripsi }}">
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