@extends('pengguna.master')

@section('title', 'Login')
    
@section('content')
<div class="container">
    <div class="login_inner">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-lg-4">
                <div class="login_title">
                    <h2 style="text-align: center;">Masuk Dengan Akun Pengguna</h2>
                    <p style="text-align: center;">Pastikan menggunakan akun pengguna aktif yang sudah terverifikasi.</p>
                </div>
                
                @if (session()->has('fail'))

                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong><i class="fa fa-ban fa-fw"></i> ERROR!!</strong> {{ session('fail') }}<br>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
    
                @endif

                <form action="{{ route('proses_login') }}" method="POST" class="login_form row">
                    @csrf
                    <div class="col-lg-12 form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email">
                    </div>
                    <div class="col-lg-12 form-group mb-2">
                        <input class="form-control" type="password" name="password" placeholder="Password">
                    </div>
                    <div class="col-lg-12 form-group mb-2 mt-1">
                        <p class="text-right"><a href="#">Lupa password anda?</a></p>
                    </div>
                    <div class="col-lg-12 form-group">
                        <button type="submit" name="simpan" value="true" class="btn subs_btn form-control">Masuk</button>
                        <p style="margin: 15px auto; text-align: center;">- ATAU -</p>
                        <a href="{{ route('register') }}" class="btn update_btn form-control">Buat Akun Baru</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection