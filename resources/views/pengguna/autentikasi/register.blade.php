@extends('pengguna.master')

@section('title', 'Register')

@section('extra_css')

    {{ Html::style('user_assets/vendors/bootstrap-selector/css/bootstrap-select.min.css') }}

@endsection

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

                {{ Form::open(['route' => 'proses_regis', 'method' => 'POST', 'class' => 'login_form calculate_shoping_form row']) }}
                    <div class="col-lg-6 form-group">
                        {{ Form::text('nama_lengkap', null, ['class' => 'form-control', 'placeholder' => 'Nama lengkap']) }}
                    </div>
                    <div class="col-lg-6 form-group">
                        {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) }}
                    </div>
                    <div class="col-lg-6 form-group">
                        {{ Form::text('no_telepon', null, ['class' => 'form-control', 'placeholder' => 'No. Telepon']) }}
                    </div>
                    <div class="col-lg-6 form-group">
                        {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}
                    </div>
                    <div class="col-lg-6 form-group">
                        {{ Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Ulangi Password']) }}
                    </div>
                    <div class="col-lg-6 form-group">
                        <select name="jenis_kelamin" class="selectpicker">
                            <option value="Laki-laki">Laki - Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="col-lg-6 form-group">
                        <button type="submit" name="simpan" value="true" class="btn subs_btn form-control">register now</button>
                    </div>
                    <div class="col-lg-6 form-group">
                        Sudah punya akun ? <a href="{{ route('login') }}">Login Sekarang</a>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@endsection

@section('extra_js')

    {{ Html::script('user_assets/vendors/bootstrap-selector/js/bootstrap-select.min.js') }}

@endsection