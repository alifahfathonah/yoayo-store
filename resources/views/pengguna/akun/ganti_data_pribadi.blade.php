@extends('pengguna.master')

@section('title', 'Rubah Data Pribadi')

@section('breadcrumb')
<div class="bg-light py-3" data-aos="fade-up" data-aos-delay="100">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-0">
                <a href="{{ route('beranda') }}">Beranda</a>
                <span class="mx-2 mb-0">/</span>
                <a href="{{ route('info-akun') }}">Profile</a>
                <span class="mx-2 mb-0">/</span>
                <strong class="text-black">Edit Data Pribadi</strong>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="site-section">
    <div class="container">
        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-md-12">
                <h2 class="h3 mb-3 text-black text-center">Edit Data Pribadi</h2>
            </div>
            <div class="col-md-8">
                @if ($errors->any())

                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong><i class="icon-ban"></i> ERROR!!</strong><br>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                @elseif(session()->has('success'))

                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong><i class="icon-check"></i> SUCCESS!!</strong> {{ session('success') }}<br>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                @endif
                {{ Form::open(['route' => 'proses_regis']) }}
                    <div class="p-3 p-lg-5 border row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {{ Form::label('inp_nama', 'Nama Lengkap', ['class' => 'text-black']) }}
                                {{ Form::text('nama_lengkap', $data->nama_lengkap, ['class' => 'form-control', 'id' => 'inp_nama']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('inp_jenis_kelamin', 'Jenis Kelamin', ['class' => 'text-black']) }}
                                {{ Form::select('jenis_kelamin', ['Pria' => 'Pria', 'Wanita' => 'Wanita'], $data->jenis_kelamin, [
                                    'placeholder' => 'Pilih Jenis Kelamin..', 'class' => 'form-control', 'id' => 'inp_jenis_kelamin']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('inp_email', 'Email', ['class' => 'text-black']) }}
                                {{ Form::email('email', $data->email, ['class' => 'form-control', 'id' => 'inp_email']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('inp_no_telepon', 'No. Telepon', ['class' => 'text-black']) }}
                                {{ Form::text('no_telepon', $data->no_telepon, ['class' => 'form-control', 'id' => 'inp_no_telepon']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('inp_alamat', 'Alamat Rumah', ['class' => 'text-black']) }}
                                {{ Form::textarea('alamat_rumah', $data->alamat_rumah, ['class' => 'form-control', 'id' => 'inp_alamat']) }}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                {{ Form::label('inp_password', 'Password', ['class' => 'text-black']) }}
                                {{ Form::password('password', ['class' => 'form-control', 'id' => 'inp_password']) }}
                            </div>
                            <div class="form-group row mt-5">
                                <div class="col-lg-12">
                                    <button type="submit" name="simpan" value="true" class="btn btn-primary btn-lg btn-block">Daftar Sekarang</button>
                                </div>
                            </div>
                        </div>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@endsection
