@extends('pengguna.master')

@section('title', 'Register')
    
@section('content')
<div class="container">
    <div class="login_inner">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-lg-8">
                <div class="login_title">
                    <h2 style="text-align: center;">Buat Akun Pelanggan</h2>
                    <p style="text-align: center;">Nikmati kemudahan berbelanja online dengan membuat akun pelanggan.</p>
                </div>

                @if ($errors->any())

                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong><i class="fa fa-ban fa-fw"></i> ERROR!!</strong> Terjadi Kesalahan Saat Menyimpan Data.<br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li><i>{{ $error }}</i></li>
                            @endforeach
                        </ul>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                
                @elseif (session()->has('success'))

                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong><i class="fa fa-check fa-fw"></i> Registrasi Berhasil</strong> Data Sukses Disimpan.<br>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                @endif
                
                <form action="{{ route('proses_regis') }}" method="POST" class="login_form row">
                    @csrf
                    <div class="col-lg-6 form-group">
                        <input class="form-control" type="text" name="nama_lengkap" placeholder="Nama Lengkap">
                    </div>
                    <div class="col-lg-6 form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email">
                    </div>
                    <div class="col-lg-6 form-group">
                        <input class="form-control" type="text" name="no_telepon" placeholder="No. Telepon">
                    </div>
                    <div class="col-lg-6 form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password">
                    </div>
                    <div class="col-lg-6 form-group">
                        <input class="form-control" type="password" name="password_confirmation" placeholder="Ulangi Password">
                    </div>
                    <div class="col-lg-6 form-group">
                        <button type="submit" name="simpan" value="true" class="btn subs_btn form-control">register now</button>
                    </div>
                    <div class="col-lg-6 form-group">
                        Sudah punya akun ? <a href="{{ route('login') }}">Login Sekarang</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection