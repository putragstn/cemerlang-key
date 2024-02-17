@extends('auth.layouts.main')

@section('container')
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-8 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg mt-3 mb-3">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="p-5">
                                <div class="text-center mb-5">
                                    <img src="{{ URL::asset('img/logo.jpeg') }}" width="200" alt="logo cemerlang key" class="img-fluid" style="border-radius: 100px;">
                                    {{-- <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1> --}}
                                </div>

                                {{-- Pesan Flash Data Jika Berhasil Register --}}
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>{{ $message }}</strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif

                                {{-- Pesan Flash Data Jika Username atau Password salah --}}
                                @if (session()->has('loginError'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>{{ session('loginError') }}</strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif 

                                <form action="/login" method="POST" class="user">

                                    {{-- Security Form --}}
                                    @csrf

                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user @error('password') is-invalid @enderror"
                                            id="exampleInputEmail" aria-describedby="emailHelp"
                                            placeholder="Masukan Alamat Email..." name="email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror"
                                            id="exampleInputPassword" placeholder="Password" name="password">
                                    </div>
                                    <button class="btn btn-primary btn-user btn-block" type="submit">Login</button>
                                </form>
                                <hr>
                                {{-- <div class="text-center">
                                    <a class="small" href="/register">Create an Account!</a>
                                </div> --}}
                                <div class="copyright text-center my-auto">
                                    <span>Copyright &copy; Cemerlang Key {{ date('Y') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
@endsection

    