<!-- Sidebar Menu -->
<ul class="sidebar-menu" data-widget="tree">
    <li class="header">NAVIGASI UTAMA</li>
    <!-- Optionally, you can add icons to the links -->
    <li><a href="{{ route('beranda_admin') }}"><i class="fa fa-home text-green"></i> <span>Beranda</span></a></li>
    <li class="header">MANAJEMEN</li>
    <li><a href="{{ route('list_produk') }}"><i class="fa fa-cubes text-primary"></i> <span>Produk <span class="label bg-primary pull-right" id="jml_produk"></span></span></a></li>
    <li><a href="{{ route('kategori_produk') }}"><i class="fa fa-clipboard text-primary"></i> <span>Kategori <span class="label bg-primary pull-right" id="jml_kategori"></span></span></a></li>
    <li><a href="{{ route('merk_produk') }}"><i class="fa fa-tags text-primary"></i> <span>Merk <span class="label bg-primary pull-right" id="jml_merk"></span></span></a></li>
    @if (session('superadmin') == true)
    <li class="header">SUPERADMIN</li>
    <li><a href="#"><i class="fa fa-users text-purple"></i> <span>Pengguna <span class="label bg-purple pull-right" id="jml_pengguna"></span></span></a></li>
    <li><a href="{{ route('superadmin_admin') }}"><i class="fa fa-users text-purple"></i> <span>Admin <span class="label bg-purple pull-right" id="jml_admin"></span></span></a></li>
    @endif
    <li class="header">TRANSAKSI</li>
    <li><a href="#"><i class="fa fa-shopping-cart text-red"></i> <span>Pesanan <span class="label bg-red pull-right" id="jml_pesanan"></span></span></a></li>
    <li><a href="#"><i class="fa fa-money text-red"></i> <span>Pembayaran <span class="label bg-red pull-right" id="jml_pembayaran"></span></span></a></li>
    <li><a href="#"><i class="fa fa-truck text-red"></i> <span>Pengiriman <span class="label bg-red pull-right" id="jml_pengiriman"></span></span></a></li>
    <li class="header">LAPORAN</li>
    <li><a href="#"><i class="fa fa-file-text-o text-green"></i> <span>Transaksi</span></a></li>
</ul>
<!-- /.sidebar-menu -->