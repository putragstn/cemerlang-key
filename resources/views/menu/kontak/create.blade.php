@extends('dashboard.layouts.main')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Informasi Kontak/Media Sosial</h1>
    </div>

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

    <form action="{{ route('kontak.store') }}" method="POST">
        @csrf
        
        {{-- <div class="row"> --}}
        <div class="form-row">
            <div class="form-group col-lg-6">
                <label for="inputEmail4"><strong>Deskripsi:</strong></label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="form-group col-lg-6">
                <label for="inputPassword4"><strong>Deskripsi:</strong></label>
                <input type="password" class="form-control" id="inputPassword4">
            </div>
            <div class="form-group col-lg-6">
                <label for="inputEmail4"><strong>Deskripsi:</strong></label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="form-group col-lg-6">
                <label for="inputPassword4"><strong>Deskripsi:</strong></label>
                <input type="password" class="form-control" id="inputPassword4">
            </div>
        </div>

        {{-- </div> --}}
        <div class="row justify-content-center mb-5 mt-3">
            <div class="col-lg-12 text-center">
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </div>

        
    </form>

</div>
<!-- /.container-fluid -->
@endsection