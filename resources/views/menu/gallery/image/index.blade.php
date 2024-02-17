@extends('dashboard.layouts.main')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Galeri Gambar</h1>
    </div>

    <a href="{{ route('gambar.create') }}" class="btn btn-primary mb-3">Upload Gambar</a>

    @if ($message = Session::get('success'))
        <div class="alert alert-success mb-3">
            <p>{{ $message }}</p>
        </div>
    @endif

    @if ($message = Session::get('error'))
        <div class="alert alert-danger mb-3">
            <p>{{ $message }}</p>
        </div>
    @endif

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Gambar</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="20px">No</th>
                            <th>Gambar</th>
                            <th>Nama Gambar</th>
                            <th>Nama File</th>
                            <th width="80px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($images as $image)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><img src="/img/foto/{{ $image->filename }}" width="100px" alt="gambar"></td>
                                <td>{{ $image->image_name }}</td>
                                <td>{{ $image->filename }}</td>

                                <td>
                                    <a class="btn btn-primary" href="{{ route('gambar.edit',$image->id) }}"><i class="fa fa-edit"></i></a>
                                    
                                    <form action="{{ route('gambar.destroy',$image->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('delete')

                                        {{-- @dd() --}}
                            
                                        <button type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Apakah Gambar Ingin Dihapus?')"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>    
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->
@endsection