<?php

namespace App\Http\Controllers\Pengguna\Produk;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdukController extends Controller
{

    public function index(Request $request) {

        if($request->has('nama_kategori')) {

            $nama_kategori = str_replace('-', ' ', ucwords($request->input('nama_kategori'), '-'));

            $kategori = DB::table('tbl_kategori')->where('nama_kategori', $nama_kategori);

            $data_produk = DB::table('tbl_barang')->where('id_kategori',
                $kategori->exists() ? $kategori->first()->id_kategori : 'tidak-ditemukan'
            );

            return view('pengguna.produk.produk', [
                'produk'        => $data_produk->get(),
                'data_filter'   => $nama_kategori,
                'nama_kategori' => DB::table('tbl_kategori')->get(),
                'jumlah_barang' => DB::table('tbl_barang')
            ]);

        } else {

            return view('pengguna.produk.produk', [
                'produk'        => DB::table('tbl_barang')->get(),
                'nama_kategori' => DB::table('tbl_kategori')->get(),
                'jumlah_barang' => DB::table('tbl_barang')
            ]);

        }

    }

    public function filter(){
        return false;
    }
}
