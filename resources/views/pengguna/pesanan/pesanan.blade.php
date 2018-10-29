@extends('pengguna.master')


@section('title', 'Pesanan')

@section('breadcrumb')
<div class="bg-light py-3" data-aos="fade-up" data-aos-delay="100">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-0">
                <a href="{{ route('beranda') }}">Beranda</a>
                <span class="mx-2 mb-0">/</span>
                <strong class="text-black">Pesanan</strong>
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

                <h3 class="text-black">Daftar Pesanan</h3>
                <hr>

            </div>
            <div class="site-blocks-table col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th class="py-2">Kode Pesanan</th>
                            <th class="py-2">No. Invoice</th>
                            <th class="py-2">Pembayaran</th>
                            <th class="py-2">Total Pembayaran</th>
                            <th class="py-2">Status</th>
                            <th class="py-2">Batalkan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#1</td>
                            <td>#PSN1810281</td>
                            <td>
                                <a href="{{ route('invoice', ['id_invoice' => 'INV1810281']) }}" class="btn btn-outline-info btn-xs py-1"><i class="fa fa-search fa-fw"></i> INV1810281</a>
                            </td>
                            <td>BRI a/n Lukman Hakim 12345678910</td>
                            <td>Rp. 340.000</td>
                            <td>
                                <span class="badge badge-warning">
                                    <i class="fa fa-truck fa-fw"></i> Dikirim
                                </span>
                            </td>
                            <td>
                                <span class="badge badge-danger">
                                    <i class="fa fa-close fa-fw"></i> Tidak Dapat Dibatalkan
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
