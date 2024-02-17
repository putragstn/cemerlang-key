@extends('dashboard.layouts.main')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Gambar</h1>
    </div>

    <a href="{{ route('gambar.index') }}" class="btn btn-primary mb-5">Kembali</a>

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

    {{-- @dd($image) --}}

    <form action="{{ route('gambar.update', $image->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-8 col-sm-8 col-md-8">
                <div class="form-group">
                    <strong>Nama Gambar:</strong>
                    <input type="text" name="image_name" class="form-control" value="{{ $image->image_name }}">
                </div>
            </div>

            <div class="col-xs-8 col-sm-8 col-md-8">
                <strong>Gambar:</strong>
            </div>
            <div class="input-group col-xs-8 col-sm-8 col-md-8">
                <div class="input-group-prepend">
                    
                    <span class="input-group-text" id="inputGroupFileAddon01"><i class="fas fa-image"></i></span>
                </div>
                <div class="custom-file">
                    <input type="file" name="filename" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                    <label class="custom-file-label" for="inputGroupFile01">{{ $image->filename }}</label>
                </div>
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8 mb-3">
                <small class="form-text text-muted">Format gambar yang dibolehkan jpeg, png, jpg, gif, svg | Max: 5MB</small>
            </div>

            <div class="col-xs-8 col-sm-8 col-md-8 text-center">
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </div>
        </div>
        
    </form>

</div>
<!-- /.container-fluid -->
@endsection