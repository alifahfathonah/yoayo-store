@extends('admin.master')

@section('title', 'Beranda')

@section('content-header')
<h1>
    Beranda
    <small>Beranda panel admin yoayo store</small>
</h1>
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
</ol>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
            <div class="callout callout-danger">
                <h4><i class="fa fa-bullhorn fa-fw"></i> PERHATIAN!!</h4>
                <p>
                    Untuk saat ini <b>YAS</b>Admin masih dalam tahap pengembangan dari sisi <i>backend</i> maupun <i>frontend</i>
                    oleh karna itu mungkin di beberapa halaman masih banyak terjadi error yang cukup fatal dikarenakan sistem masih
                    terus dalam tahap testing dan pengembangan.
                </p>
                <hr style="border:0.5px solid #d2d6de;">
                <p>
                    <b><i>#Regard</i></b><i>, Muhammad Iqbal - <b>YAS</b>Admin Software Engineer.</i>
                </p>
            </div>
    </div>
</div>
@endsection