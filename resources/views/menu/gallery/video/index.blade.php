@extends('dashboard.layouts.main')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Galeri Video</h1>
    </div>

    <a href="{{ route('video.create') }}" class="btn btn-primary mb-3">Upload Video</a>

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
            <h6 class="m-0 font-weight-bold text-primary">Tabel Video</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="20px">No</th>
                            <th>Video</th>
                            <th>Nama Video</th>
                            <th>Nama File</th>
                            <th width="80px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($videos as $video)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <video width="280" height="200" controls>
                                        <source src="/video/{{ $video->video }}" type="video/mp4">
                                    </video>
                                </td>
                                <td>{{ $video->video_name }}</td>
                                <td>{{ $video->video }}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('video.edit',$video->id) }}"><i class="fa fa-edit"></i></a>
                                    
                                    <form action="{{ route('video.destroy',$video->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('delete')

                            
                                        <button type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Apakah Video Ingin Dihapus?')"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>

                                {{-- <td>{{ $loop->iteration }}</td>
                                <td>
                                    <img src="/img/foto/{{ $image->filename }}" width="100px" alt="gambar">
                                </td>
                                <td>{{ $image->image_name }}</td>
                                <td>{{ $image->filename }}</td>
                                --}}

                                
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