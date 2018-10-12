@extends('admin.master')

@section('title', 'Manajemen Pesanan')

@section('extra_css')

    {{ Html::style('admin_assets/component/datatables.net-bs/css/dataTables.bootstrap.min.css') }}

@endsection

@section('content-header')
<h1>
    Manajamen Pesanan
    <small>Halaman manajemen segala pesanan</small>
</h1>
<ol class="breadcrumb">
    <li><a href="{{ route('beranda_admin') }}"><i class="fa fa-home"></i> Beranda</a></li>
    <li><i class="fa fa-shopping-cart fa-fw"></i> pesanan</li>
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
        <div class="box box-solid box-success">
            <div class="box-header">
                <h3 class="box-title">
                    Table Pesanan Yang Sedang Di Proses
                </h3>
            </div>
            <div class="box-body">
                <table class="table table-bordered table-hover" id="table_pesanan">
                    <thead>
                        <tr>
                            <th>ID Pesanan</th>
                            <th>Nama Penerima</th>
                            <th>No Telepon</th>
                            <th>Status Pesanan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="values">
                        <?php $counter = 1; ?>
                        @foreach ($data_pesanan as $item)
                            @if($item->status_pesanan <= 2)
                            <tr>
                                <td id="id_{{ $counter }}">{{ $item->id_pesanan }}</td>
                                <td>{{ $item->nama_penerima  }}</td>
                                <td>{{ $item->no_telepon  }}</td>
                                <td>
                                    <span class="label {{ $stat_label[$item->status_pesanan] }}">
                                        {{ $stat_notif[$item->status_pesanan] }}
                                    </span>
                                </td>
                                <td>
                                    @if($item->status_pesanan == 1)
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">
                                            Action <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="{{ route('detail_pesanan_admin', [$id_pesanan, $item->id_pesanan]) }}"><i class="fa fa-user fa-fw"></i> Detail pesanan</a>
                                            </li>
                                            <li>
                                                <a href="#" class="proses_pesanan" data-toggle="modal" data-target="#proses_pesanan" id="{{ $counter }}">
                                                    <i class="fa fa-trash fa-fw"></i> Proses Pesanan
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="hapus_pesanan" data-toggle="modal" data-target="#hapus_pesanan" id="{{ $counter }}">
                                                    <i class="fa fa-trash fa-fw"></i> Hapus pesanan
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    @else
                                        <span class="label bg-red">Menunggu Pembayaran</span>
                                    @endif
                                </td>
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

@section('modal')
<div class="modal modal-default fade" id="proses_pesanan">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Ingin Memproses Pesanan ?</h4>
            </div>
            {!! Form::open(['method' => 'PUT', 'id' => 'form_proses_pesanan']) !!}
                <div class="modal-body">
                    <div class="form-group">
                        <select class="form-control" name="status_pesanan">
                            <option value="0">Belum Di Verifikasi</option>
                            <option value="1">Telah Di Verifikasi</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn pull-left" data-dismiss="modal">Batal</button>
                    <button type="submit" name="simpan" value="true" class="btn btn-danger"><i class="fa fa-trash fa-fw"></i> Proses pesanan</button>
                </div>
            {!! Form::close() !!}
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<div class="modal modal-default fade" id="hapus_pesanan">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Anda Yakin Ingin Lanjutkan ?</h4>
            </div>
            {!! Form::open(['method' => 'DELETE', 'id' => 'form_hapus_pesanan']) !!}
                <div class="modal-footer">
                    <button type="button" class="btn pull-left" data-dismiss="modal">Batal</button>
                    <button type="submit" name="simpan" value="true" class="btn btn-danger"><i class="fa fa-trash fa-fw"></i> Hapus pesanan</button>
                </div>
            {!! Form::close() !!}
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@endsection

@section('extra_js')

    {{ Html::script('admin_assets/component/datatables.net/js/jquery.dataTables.min.js') }}
    {{ Html::script('admin_assets/component/datatables.net-bs/js/dataTables.bootstrap.min.js') }}

    <script>
        $(document).ready(function() {
            $('#table_pesanan').DataTable({
                'lengthChange': false,
                'length': 10,
                'searching': false
            })
        })
    </script>

@endsection
