@extends('dashboard.layouts.main')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Informasi Akun</h1>
    </div>

    <a href="/dashboard" class="btn btn-primary mb-3">Kembali</a>

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

    <form action="/dashboard/akun" method="POST">
        @csrf
        @method('PUT')
        
        <div class="row">
            
            <div class="col-xs-8 col-sm-8 col-md-8 mb-3">
                <div class="form-group">
                    <strong>Nama:</strong>
                    <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                </div>
            </div>

            <div class="col-xs-8 col-sm-8 col-md-8 mb-3">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="email" name="email" class="form-control" value="{{ $user->email }}">
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