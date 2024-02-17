@extends('dashboard.layouts.main')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Jam Operasional</h1>
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

    <form action="{{ route('jam-operasional.store') }}" method="POST">
        @csrf
        
        <div class="row">
            <div class="col-xs-8 col-sm-8 col-md-8 mb-3">
                <div class="form-group">
                    <strong>Hari:</strong>
                    <input type="text" name="hari" class="form-control">
                </div>
            </div>

            <div class="col-xs-8 col-sm-8 col-md-8 mb-3">
                <div class="form-group">
                    <strong>Jam Buka:</strong>
                    <input type="text" name="jam_buka" class="form-control">
                </div>
            </div>

            <div class="col-xs-8 col-sm-8 col-md-8 mb-3">
                <div class="form-group">
                    <strong>Jam Tutup:</strong>
                    <input type="text" name="jam_tutup" class="form-control">
                </div>
            </div>

            <div class="col-xs-8 col-sm-8 col-md-8 text-center">
                    <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </div>
        
    </form>

</div>
<!-- /.container-fluid -->
@endsection