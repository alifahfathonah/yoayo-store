@extends('admin.master')

@section('title', 'Manajemen Pengiriman')

@section('extra_css')

    {{ Html::style('admin_assets/component/datatables.net-bs/css/dataTables.bootstrap.min.css') }}

@endsection

@section('content-header')
<h1>
    Manajamen Pengiriman
    <small>Halaman manajemen segala pengiriman pesanan</small>
</h1>
<ol class="breadcrumb">
    <li><a href="{{ route('beranda_admin') }}"><i class="fa fa-home"></i> Beranda</a></li>
    <li><i class="fa fa-truck fa-fw"></i> pengiriman</li>
</ol>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12">
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> ERROR!</h4>
                @foreach ($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </div>
        @elseif (session()->has('success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                {{ session('success') }}
            </div>
        @endif
        <div class="box box-solid box-danger">
            <div class="box-header">
                <h3 class="box-title">
                    Table Data Pesanan Terkirim
                </h3>
            </div>
            <div class="box-body">
                <table class="table table-bordered table-hover" id="table_pengiriman1">
                    <thead>
                        <tr>
                            <th>ID Pesanan</th>
                            <th>Nama Penerima</th>
                            <th>No. Telepon</th>
                            <th>Layanan</th>
                            <th>No. Resi</th>
                            <th>Status Pesanan</th>
                            <th>Tanggal Di Kirim</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $counter = 1; ?>
                        @foreach ($data_pengiriman as $item)
                            @if($item->status_pesanan == 3)
                            <tr>
                                <td id="id_{{ $counter }}">
                                    <a href="{{ route('detail_pesanan_admin', ['id_pesanan' => $item->id_pesanan]) }}">
                                        {{ $item->id_pesanan }}
                                    </a>
                                </td>
                                <td>{{ $item->nama_penerima }}</td>
                                <td>{{ $item->no_telepon  }}</td>
                                <td>JNE ({{ $item->layanan }})</td>
                                <td>{{ $item->no_resi }}</td>
                                <td><span class="label bg-navy">Telah Di Kirim</span></td>
                                <td>{{ $item->tanggal_dikirim }}</td>
                            </tr>
                            @endif
                        <?php $counter++; ?>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="box box-solid box-success">
            <div class="box-header">
                <h3 class="box-title">
                    Table Data Pesanan Selesai
                </h3>
            </div>
            <div class="box-body">
                <table class="table table-bordered table-hover" id="table_pengiriman2">
                    <thead>
                        <tr>
                            <th>ID Pesanan</th>
                            <th>Nama Penerima</th>
                            <th>No. Telepon</th>
                            <th>Layanan</th>
                            <th>No. Resi</th>
                            <th>Status Pesanan</th>
                            <th>Tanggal Di Terima</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $counter = 1; ?>
                        @foreach ($data_pengiriman as $item)
                            @if($item->status_pesanan == 4)
                            <tr>
                                <td id="id_{{ $counter }}">{{ $item->id_pesanan }}</td>
                                <td>{{ $item->nama_penerima }}</td>
                                <td>{{ $item->no_telepon  }}</td>
                                <td>JNE-{{ $item->layanan }}</td>
                                <td>{{ $item->no_resi }}</td>
                                <td><span class="label bg-green">Telah Di Terima</span></td>
                                <td>{{ $item->tanggal_diterima }}</td>
                            </tr>
                            @endif
                        <?php $counter++; ?>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('extra_js')

    {{ Html::script('admin_assets/component/datatables.net/js/jquery.dataTables.min.js') }}
    {{ Html::script('admin_assets/component/datatables.net-bs/js/dataTables.bootstrap.min.js') }}

    <script>
        $(document).ready(function() {
            $('#table_pengiriman1').DataTable({
                'lengthChange': false,
                'length': 10,
                // 'searching': false
            })
            $('#table_pengiriman2').DataTable({
                'lengthChange': false,
                'length': 10,
                // 'searching': false
            })
        })
    </script>

@endsection
