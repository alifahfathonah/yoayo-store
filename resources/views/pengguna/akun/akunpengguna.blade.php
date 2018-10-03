@extends('pengguna.master')

@section('title', 'Profile '.session('nama_lengkap'))
    
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 mb-4"><a href="{{ route('beranda') }}" class="btn btn-secondary"><i class="arrow_left"></i> Kembali</a></div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h6><i class="fa fa-user fa-fw"></i> Profile, {{ session('nama_lengkap') }}</h6>        
                </div>
                <div class="card-body row">
                    <div class="col-md-12 mb-3">
                        <h6 class="mb-1">ID Pengguna</h6>
                        <p>{{ $data_pengguna->id_pengguna }}</p>
                    </div>
                    <div class="col-md-12 mb-3">
                        <h6 class="mb-1">Nama Pengguna</h6>
                        <p>{{ $data_pengguna->nama_lengkap }}</p>
                    </div>
                    <div class="col-md-12 mb-3">
                        <h6 class="mb-1">Tanggal Bergabung</h6>
                        <p>{{ $data_pengguna->tanggal_bergabung }}</p>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-sm btn-primary"><i class="fa fa-edit fa-fw"></i> Ubah Data Profile</button>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h6><i class="fa fa-map fa-fw"></i> Informasi Alamat</h6>
                </div>
                <div class="card-body row">
                    <div class="col-md-12 mb-3">
                        <h6 class="mb-1">Alamat Rumah</h6>
                        <p>@if(is_null($data_pengguna->alamat_rumah)) - @else {{ $data_pengguna->alamat_rumah }} @endif</p>
                    </div>
                    <div class="col-md-12 mb-3">
                        <h6 class="mb-1">No. Telepon
                            <span class="badge badge-success"><i class="fa fa-check fa-fw"></i> Verified</span>
                        </h6>
                        <p>{{ $data_pengguna->no_telepon }}</p>
                    </div>
                    <div class="col-md-12 mb-3">
                        <h6 class="mb-1">Email Aktif 
                            <span class="badge badge-success"><i class="fa fa-check fa-fw"></i> Verified</span>
                        </h6>
                        <p>{{ $data_pengguna->email }}</p>
                    </div>
                </div>
                <div class="card-footer">
                    @if (is_null($data_pengguna->alamat_rumah))
                        <button class="btn btn-sm btn-warning"><i class="fa fa-edit fa-fw"></i> Masukan Alamat Pengiriman</button>    
                    @else
                        <button class="btn btn-sm btn-primary"><i class="fa fa-edit fa-fw"></i> Ubah Informasi Alamat</button>    
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection