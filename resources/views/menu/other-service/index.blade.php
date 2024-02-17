@extends('dashboard.layouts.main')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Layanan Lainnya</h1>
    </div>

    <a href="{{ route('layanan-lainnya.create') }}" class="btn btn-primary mb-3">Upload Gambar</a>

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
            <h6 class="m-0 font-weight-bold text-primary">Data Layanan Lainnya</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="20px">No</th>
                            <th>Gambar</th>
                            <th>Jenis Layanan</th>
                            <th width="80px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($otherServices as $service)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><img src="/img/foto/layanan-lainnya/{{ $service->image }}" width="100px" alt="{{ $service->jenis_layanan }}"></td>
                                <td>{{ $service->jenis_layanan }}</td>

                                <td>
                                    <a class="btn btn-primary" href="{{ route('layanan-lainnya.edit',$service->id) }}"><i class="fa fa-edit"></i></a>
                                    
                                    <form action="{{ route('layanan-lainnya.destroy',$service->id) }}" method="POST" class="d-inline">
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