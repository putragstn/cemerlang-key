@extends('dashboard.layouts.main')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Jam Operasional</h1>
    </div>

    <a href="{{ route('jam-operasional.create') }}" class="btn btn-primary mb-3">Tambah Jam Operasional</a>

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
            <h6 class="m-0 font-weight-bold text-primary">Data Jam Operasioanl</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="20px">No</th>
                            <th>Hari</th>
                            <th>Jam Buka</th>
                            <th>Jam Tutup</th>
                            <th width="80px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($days as $day)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $day->hari }}</td>
                                <td>{{ $day->jam_buka }}</td>
                                <td>{{ $day->jam_tutup }}</td>

                                <td>
                                    <a class="btn btn-primary" href="{{ route('jam-operasional.edit',$day->id) }}"><i class="fa fa-edit"></i></a>
                                    
                                    <form action="{{ route('jam-operasional.destroy',$day->id) }}" method="POST" class="d-inline">
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