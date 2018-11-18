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
                            <th class="py-2">No</th>
                            <th class="py-2">Kode Pesanan</th>
                            <th class="py-2">No. Invoice</th>
                            <th class="py-2">Total Pembayaran</th>
                            <th class="py-2">Status</th>
                            <th class="py-2">Batalkan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $count = 1;?>
                        <?php $status = ['Belum Di Proses', 'Telah Di Verifikasi', 'Sedang Di Proses',
                                         'Telah Di Kirim', 'Telah Di Terima', 'Selesai'] ?>
                        @forelse ($data_pesanan as $item)
                            <tr>
                                <td class="py-2">{{ '#'.$count }}</td>
                                <td class="py-2">
                                    {{ '#'.$item->id_pesanan }}<br>
                                    <a href="{{ route('detail_pesanan', ['id_pesanan' => $item->id_pesanan]) }}">
                                        <span class="badge badge-info">
                                            Lihat Detail Pesanan
                                        </span>
                                    </a>
                                </td>
                                <td class="py-2">
                                    <?php $inv = $invoice->where('id_pesanan', $item->id_pesanan)->first(); ?>
                                    @if($item->foto_bukti == NULL)
                                        <a href="{{ route('upload_bukti', ['id_pesanan' => $item->id_pesanan]) }}" class="btn btn-outline-warning btn-xs py-1">
                                            <i class="fa fa-upload fa-fw"></i> Upload Bukti
                                        </a><br>
                                        <small class="help-block">Upload bukti pembayaran.</small>
                                    @elseif($item->foto_bukti != NULL && $item->status_pembayaran == 0)
                                        <span class="badge badge-secondary">
                                            <i class="fa fa-close fa-fw"></i> Menunggu Verifikasi
                                        </span>
                                    @elseif($item->dibatalkan == 1)
                                        <span class="badge badge-danger">
                                            <i class="fa fa-close fa-fw"></i> Dibatalkan
                                        </span>
                                    @else
                                        <a href="{{ route('invoice', ['id_invoice' => $inv->id_invoice]) }}" target="_blank" class="btn btn-outline-info btn-xs py-1">
                                            <i class="fa fa-search fa-fw"></i> {{ $inv->id_invoice }}
                                        </a>
                                    @endif
                                </td>
                                <td class="py-2">{{ Rupiah::create($item->total_bayar) }}</td>
                                <td class="py-2">
                                    <b>@if($item->dibatalkan == 0)<?=$status[$item->status_pesanan]?>@else Dibatalkan @endif</b>
                                </td>
                                <td class="py-2">
                                    @if($item->status_pesanan >= 3)
                                        <span class="badge badge-danger">
                                            <i class="fa fa-close fa-fw"></i> Tidak Dapat Dibatalkan
                                        </span>
                                    @elseif($item->dibatalkan == 1)
                                        <span class="badge badge-danger">
                                            <i class="fa fa-close fa-fw"></i> Dibatalkan
                                        </span>
                                    @else
                                        {{ Form::open(['route' => ['pesanan_dibatalkan', $item->id_pesanan], 'method' => 'PUT']) }}
                                        <input type="submit" class="btn btn-danger btn-xs py-1" name="simpan" value="Batalkan">
                                        {{ Form::open() }}
                                    @endif
                                </td>
                            </tr>
                            @if($item->status_pesanan >= 3 && $item->status_pesanan < 5)
                            <tr style="background-color: rgba(108, 117, 125, 0.16)!important;">
                                <td class="py-2 text-left" colspan="6">
                                    <b>Resi Pengiriman : </b> <code>{{ $item->no_resi }}</code> | Dikirim Pada : {{ $item->tanggal_dikirim }} |
                                    Layanan Pengiriman : JNE - {{ $item->layanan }}
                                    <br> <i><small>Jika Barang telah di terima harap konfirmasi pnerimaan pesanan</small></i>
                                    <span class="badge badge-warning"><a href="{{ route('detail_pesanan', ['id_pesanan' => $item->id_pesanan]) }}" class="text-black">Konfirmasi Pesanan</a></span>
                                    <i><small> | Track Pesanan :  </small></i><span class="badge badge-warning"><a href="https://jne.co.id" class="text-black">Tracking Pesanan</a></span>
                                </td>
                            </tr>
                            @endif
                        @empty
                            <tr>
                                <td colspan="6" class="text-center py-2">Tidak Ada Data...</td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
                <div class="text-black">
                    <b>NOTE:</b> Jika ingin mencabut status pembatalan silahkan hubungi kontak di bawah.
                </div>
            </div>
        </div>
    </div>
</div>

@endsection