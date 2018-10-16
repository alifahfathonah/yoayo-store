<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class BerandaController extends Controller
{
    public function index(Request $request) {

        if($request->session()->exists('email_admin')) {

            return view('admin.beranda');

        } else {

            return redirect()->route('login_admin');

        }

    }

    public function sidebar_counter() {

        $table = ['barang', 'kategori', 'merk', 'pengguna', 'admin', 'pesanan', 'pembayaran', 'pengiriman'];

        $data = [];

        foreach($table as $key) {

            if($key == 'pengiriman') {
                $data[] = DB::table('tbl_pesanan')->select('id_pesanan')
                    ->where('status_pesanan', 3)->count();
            } else if ($key == 'pesanan') {
                $data[] = DB::table('tbl_pesanan')->select('id_pesanan')
                    ->whereBetween('status_pesanan', [1, 2])->count();
            } else {
                $data[] = DB::table('tbl_'.$key)->count();
            }
        }

        return \json_encode($data, JSON_PRETTY_PRINT);
    }
}
