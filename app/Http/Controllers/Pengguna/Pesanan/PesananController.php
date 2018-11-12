<?php

namespace App\Http\Controllers\Pengguna\Pesanan;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PesananController extends Controller
{
    public function index(Request $request) {

        if(session()->has('email_pengguna')) {

            $data = DB::table('tbl_pembayaran as pembayaran')
            ->join('tbl_pesanan as pesanan', 'pesanan.id_pesanan', 'pembayaran.id_pesanan')
            ->select('pembayaran.*', 'pesanan.*')
            ->where([
                ['pesanan.id_pengguna', session('id_pengguna')], ['pesanan.status_pesanan', '<', '5'],
            ])->get();

            dd($data);
            return view('pengguna.pesanan.pesanan', ['data_pesanan', $data]);

        }

    }
}
