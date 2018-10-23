@extends('pengguna.master')

@section('title', 'Profile '.$data_pengguna->nama_lengkap)

@section('content')
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2 class="h3 mb-3 text-black">Detail Akun</h2>
            </div>
            <div class="col-md-5">
                <h2 class="h3 mb-3 text-black">Informasi Alamat Pengiriman</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="p-4 border mb-3">
                    <span class="d-block text-primary h6 text-uppercase">Nama Pengguna</span>
                    <p>{{ $data_pengguna->nama_lengkap }}</p>
                    <span class="d-block text-primary h6 text-uppercase">Jenis Kelamin</span>
                    <p>{{ $data_pengguna->jenis_kelamin }}</p>
                    <span class="d-block text-primary h6 text-uppercase">Email</span>
                    <p>{{ $data_pengguna->email }}</p>
                    <span class="d-block text-primary h6 text-uppercase">Tanggal Bergabung</span>
                    <p class="mb-0">{{ $data_pengguna->tanggal_bergabung }}</p>

                </div>
            </div>
            <div class="col-md-5">
                <div class="p-4 border mb-3">
                    <span class="d-block text-primary h6 text-uppercase">Nama Penerima</span>
                    <p>{{ $data_pengguna->nama_lengkap }}</p>
                    <span class="d-block text-primary h6 text-uppercase">Alamat Rumah</span>
                    <p>{{ $data_pengguna->alamat_rumah != NULL ? $data_pengguna->alamat_rumah : '-' }}</p>
                    <span class="d-block text-primary h6 text-uppercase">No. Telepon</span>
                    <p class="mb-0">{{ $data_pengguna->no_telepon != NULL ? $data_pengguna->no_telepon : '-' }}</p>
                </div>
            </div>
            <div class="col-md-3">
                <a href="#" class="btn btn-info btn-block"><i class="icon-edit"></i> Edit Data Pribadi</a><hr>
                <a href="#" class="btn btn-info btn-block"><i class="icon-lock"></i> Ganti Password</a><hr>
                @if($data_pengguna->alamat_rumah == NULL && $data_pengguna->no_telepon == NULL)
                <a href="#" class="btn btn-warning btn-block"><i class="icon-edit"></i> Lengkapi Data Pribadi</a>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
