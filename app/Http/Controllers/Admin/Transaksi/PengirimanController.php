<?php

namespace App\Http\Controllers\Admin\Transaksi;

use DateTime;
use validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PengirimanController extends Controller
{
    public function index(Request $request) {

        if ($request->session()->exists('email_admin')) {

            $data = DB::table('tbl_pesanan')
                ->select(
                    'id_pesanan', 'nama_penerima', 'alamat_tujuan', 'layanan',
                    'no_telepon', 'no_resi', 'status_pesanan', 'tanggal_dikirim'
                )->get();

            return view('admin.transaksi.pengiriman', ['data_pengiriman' => $data]);

        }

    }
}
