@extends('pengguna.master')


@section('title', 'Pembayaran')

@section('breadcrumb')
<div class="bg-light py-3" data-aos="fade-up" data-aos-delay="100">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-0">
                <a href="{{ route('beranda') }}">Beranda</a>
                <span class="mx-2 mb-0">/</span>
                <strong class="text-black">Pembayaran</strong>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="site-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12">

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
                        <strong><i class="fa fa-ban fa-fw"></i> SUCCESS!!</strong> {{ session('success') }} <br>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                @endif

                <h3 class="text-black">Daftar Pembayaran</h3>
                <hr>

            </div>
            <div class="site-blocks-table col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="py-2">No</th>
                            <th class="py-2">Kode Pesanan</th>
                            <th class="py-2">Bank</th>
                            <th class="py-2">Atas Nama</th>
                            <th class="py-2">No. Rekening</th>
                            <th class="py-2">Total Pembayaran</th>
                            <th class="py-2">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#1</td>
                            <td>#PSN1810281</td>
                            <td>BRI</td>
                            <td>Lukman Hakim</td>
                            <td>12345678910</td>
                            <td>Rp. 340.000</td>
                            <td>
                                <span class="badge badge-secondary">
                                    <i class="fa fa-close fa-fw"></i> Belum Di Veifikasi
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
