@extends('pengguna.master')


@section('title', 'Keranjang')

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

                <h3 class="text-black">Invoice #INV1810281</h3>
                <hr>

            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">Detail Informasi</div>
                            <div class="card-body row">
                                <div class="col-md-4">
                                    <b>Informasi Pengirim</b><hr>
                                    <i>From,</i>
                                    <b>Yoayo</b>Store<br>
                                    Universitas BSI Gedung D2,<br>
                                    Margonda Depok, Indonesia<br>
                                    No. Telepon: (123) 45678910<br>
                                    Email: info@yoayostore.com
                                </div>
                                <div class="col-md-4">
                                    <b>Informasi Penerima</b><hr>
                                    <i>To,</i>
                                    <b>Lukman Hakim</b><br>
                                    Citayam, Jawabarat<br>
                                    No. Telepon: +6212345678910
                                </div>
                                <div class="col-md-4">
                                    <b>Informasi Pesanan</b><hr>
                                    <b>ID Pesanan:</b> #PSN1810221<br>
                                    <b>Status Pesanan:</b> Telah Di Kirim<br>
                                    <b>No. Resi:</b> CONTOHINPUTRESI<br>
                                    <b>Tanggal Dikirim:</b> 2018-10-22 05:10:52
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">Detail Pengiriman</div>
                    <div class="card-body row">
                        <div class="col-md-6">
                            <b>Informasi Layanan</b><hr>
                            <b>Jasa:</b> JNE<br>
                            <b>Layanan:</b> YES<br>
                            <b>No. Resi:</b> CONTOHINPUTRESI<br>
                            <b>Tanggal Dikirim:</b> 2018-10-22 05:10:52
                        </div>
                        <div class="col-md-6">
                            <b>Informasi Penerima</b><hr>
                            <i>To,</i>
                            <b>Lukman Hakim</b><br>
                            Citayam, Jawabarat<br>
                            No. Telepon: +6212345678910
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-blocks-table col-md-8 mt-5">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="py-2">#No</th>
                            <th class="py-2">Nama Barang</th>
                            <th class="py-2">Harga</th>
                            <th class="py-2">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#1</td>
                            <td>Wilson Highlight Original x 1<br>Berat: 500gram</td>
                            <td>Rp 340.000</td>
                            <td>Rp 340.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-4 mt-5">
                <div class="card">
                    <div class="card-header">
                        Subtotal Pesanan
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Total Berat</td>
                                    <td>:</td>
                                    <td>500gram</td>
                                </tr>
                                <tr>
                                    <td>Total Biaya</td>
                                    <td>:</td>
                                    <td>Rp 340.000</td>
                                </tr>
                                <tr>
                                    <td>Layanan</td>
                                    <td>:</td>
                                    <td>JNE (YES)</td>
                                </tr>
                                <tr>
                                    <td>Ongkir</td>
                                    <td>:</td>
                                    <td>Rp 18000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
