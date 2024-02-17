@extends('dashboard.layouts.main')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Tentang Kami</h1>
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

    <form action="{{ route('tentang-kami.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="row">
            <div class="col-xs-8 col-sm-8 col-md-8">
                <strong>Gambar:</strong>
            </div>
            <div class="input-group col-xs-8 col-sm-8 col-md-8">
                <div class="input-group-prepend">
                    
                    <span class="input-group-text" id="inputGroupFileAddon01"><i class="fas fa-image"></i></span>
                </div>
                <div class="custom-file">
                    <input type="file" name="image" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                    <label class="custom-file-label" for="inputGroupFile01">Pilih Gambar</label>
                </div>
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8 mb-3">
                <small class="form-text text-muted">Format gambar yang dibolehkan jpeg, png, jpg, gif, svg | Max: 5MB</small>
            </div>

            <div class="col-xs-8 col-sm-8 col-md-8 mb-3">
                <div class="form-group">
                    <strong>Paragraf 1:</strong>
                    <textarea class="form-control" name="paragraf_1" rows="3"></textarea>
                </div>
            </div>

            <div class="col-xs-8 col-sm-8 col-md-8 mb-3">
                <div class="form-group">
                    <strong>Paragraf 2:</strong>
                    <textarea class="form-control" name="paragraf_2" rows="3"></textarea>
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