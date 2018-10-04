<!--================Menu Area =================-->
<header class="shop_header_area carousel_menu_area">
    <div class="carousel_top_header black_top_header row m0">
        <div class="container">
            <div class="carousel_top_h_inner">
                <div class="float-md-right">
                    <ul class="account_list">

                        @if (session('email'))

                            <li style="color: white;">
                                <i class="fa fa-user fa-fw"></i> Welcome,
                                <a href="{{ route('akun_pengguna', ['nama_pengguna'=> str_replace(' ', '_', strtolower(session('nama_lengkap')))]) }}">
                                    {{ session('nama_lengkap') }}
                                </a>
                            </li>
                            <li><a href="#"><i class="fa fa-lock fa-fw"></i> Change Password</a></li>
                            <li>
                                <a href="{{ route('keranjang') }}"><i class="fa fa-shopping-cart fa-fw"></i>
                                    Keranjang ( {{ (new App\Http\Controllers\Pengguna\Keranjang\KeranjangController)::count_keranjang() }} )
                                </a>
                            </li>
                            <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>

                        @else

                            <li><a href="/login"><i class="fa fa-sign-in fa-fw"></i> Login</a></li>

                        @endif

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="carousel_menu_inner">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="{{ route('beranda') }}">{{ Html::image('user_assets/img/new-logo.png', 'YoAyoStore') }}</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="nav-link" href="{{ route('beranda') }}"> Beranda</a></li>
                        <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Kategori Item <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="#">Comming Soon</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#">Tentang Kami</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Informasi Kontak</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="container">
        <div class="advanced_search_area row" style="border: none;">
                    <form action="" method="GET" class="col-md-12">
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Search" aria-label="Search" style="border: 1px solid #00000057;">
                            <span class="input-group-btn">
                                <button class="btn btn-secondary" type="submit"><i class="icon-magnifier icons"></i></button>
                            </span>
                        </div>
                    </form>
        </div>
    </div>
</header>
<!--================End Menu Area =================-->