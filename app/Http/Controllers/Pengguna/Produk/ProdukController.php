<?php

namespace App\Http\Controllers\Pengguna\Produk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdukController extends Controller
{
    public function detail_produk(Request $request) {
        return view('pengguna.produk.detailproduk');
    }

    
}
