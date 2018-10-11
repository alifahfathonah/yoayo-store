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
                    'id_pesanan', 'nama_penerima', 'alamat_tujuan',
                    'no_telepon', 'status_pesanan', 'tanggal_dikirim'
                )->get();

            return view('admin.transaksi.pengiriman', ['data_pengiriman' => $data]);

        }

    }

    public function edit_pengiriman(Request $request, $id_pengiriman) {

        if ($request->has('simpan') == true) {

            $validasi = Validator::make($request->all(), [
                'no_resi'        => 'required|alpha_num|max:20',
                'status_pesanan' => 'required|integer|max:1',
            ]);

            if($validasi->fails()) {

                return back()->withErrors($validasi);

            }

            $data = DB::table('tbl_pesanan')->where('id_pesanan', $id_pesanan);

            if ($request->input('status_pesanan') == 3) {
                $data->update([
                    'no_resi'           => $request->input('no_resi'),
                    'status_pesanan'    => $request->input('status_pesanan'),
                    'tanggal_dikirim'   => (new Datetime)->format('Y-m-d H:m:s'),
                ]);
            }
        }

    }
}
