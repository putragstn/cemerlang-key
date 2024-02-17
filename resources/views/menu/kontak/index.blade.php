@extends('dashboard.layouts.main')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Informasi Kontak/Media Sosial</h1>
    </div>

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

    <form action="{{ route('kontak.update', $contact->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        {{-- <div class="row"> --}}
        <div class="form-row">
            <div class="form-group col-lg-6">
                <label for="whatsapp"><strong>Nomer Whatsapp:</strong></label>
                <input name="no_whatsapp" type="text" class="form-control" value="{{ $contact->no_whatsapp }}" id="whatsapp">
            </div>
            <div class="form-group col-lg-6">
                <label for="whatsapp"><strong>Link Whatsapp:</strong></label>
                <input name="link_whatsapp" type="text" class="form-control" value="{{ $contact->link_whatsapp }}" id="whatsapp">
            </div>
            <div class="form-group col-lg-6">
                <label for="facebook"><strong>Nama Facebook:</strong></label>
                <input name="nama_facebook" type="text" class="form-control" value="{{ $contact->nama_facebook }}" id="facebook">
            </div>
            <div class="form-group col-lg-6">
                <label for="facebook"><strong>Link Facebook:</strong></label>
                <input name="link_facebook" type="text" class="form-control" value="{{ $contact->link_facebook }}" id="facebook">
            </div>
            <div class="form-group col-lg-6">
                <label for="Instagram"><strong>Nama Instagram:</strong></label>
                <input name="nama_instagram" type="text" class="form-control" value="{{ $contact->nama_instagram }}" id="Instagram">
            </div>
            <div class="form-group col-lg-6">
                <label for="Instagram"><strong>Link Instagram:</strong></label>
                <input name="link_instagram" type="text" class="form-control" value="{{ $contact->link_instagram }}" id="Instagram">
            </div>
            <div class="form-group col-lg-6">
                <label for="lokasi"><strong>Lokasi:</strong></label>
                <textarea class="form-control" name="lokasi"  id="link_lokasi" rows="3">{{ $contact->lokasi }}</textarea>
            </div>
            <div class="form-group col-lg-6">
                <label for="link_lokasi"><strong>Link Lokasi Google Maps:</strong></label>
                <textarea class="form-control" name="link_lokasi"  id="link_lokasi" rows="3">{{ $contact->link_lokasi }}</textarea>
            </div>
            <div class="form-group col-lg-6">
                <label for="inputEmail4"><strong>Telepon:</strong></label>
                <input name="telepon" type="text" class="form-control" value="{{ $contact->telepon }}" id="inputEmail4">
            </div>
            <div class="form-group col-lg-6">
                <label for="email"><strong>Email:</strong></label>
                <input name="email" type="email" class="form-control" value="{{ $contact->email }}" id="email">
            </div>
        </div>

        {{-- </div> --}}
        <div class="row justify-content-center mb-5 mt-3">
            <div class="col-lg-12 text-center">
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </div>
        </div>

        
    </form>

</div>
<!-- /.container-fluid -->
@endsection