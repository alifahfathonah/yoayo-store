<?php

namespace App\Http\Controllers\Admin\Transaksi;

use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PembayaranController extends Controller
{
    public function index(Request $request) {

        if($request->session()->exists('email_admin')) {

            $data = DB::table('tbl_pembayaran')->get();

            return view('admin.transaksi.pembayaran', ['data_pembayaran' => $data]);

        } else {

            return redirect()->route('login_admin')->with('fail', 'Harap Login Terlebih Dahulu');

        }

    }

    public function rubah_status(Request $request, $id_pesanan) {

        /**
          * STATUS PEMBAYARAN
          * ==============================
          * - 0 => Menunggu Verifikasi
          * - 1 => Telah Di Diterima
          */

        if($request->has('simpan') == true) {

            $update_pesanan = DB::table('tbl_pesanan')->where('id_pesanan', $id_pesanan);
            $data = $update_pesanan->update(['status_pesanan' => $update_pesanan->first()->status_pesanan == 0 ? 1 : 0]);

            $update_pembayaran = DB::table('tbl_pembayaran')->where('id_pesanan', $id_pesanan);
            $update_pembayaran->update(['status_pembayaran' => $update_pembayaran->first()->status_pembayaran == 0 ? 1 : 0]);

            return redirect()->route('pembayaran_admin')->with('success', 'Pembayaran Dengan ID '.$id_pesanan.' Berhasil Di Update');

        } else {

            return back()->withErrors('Terjadi Kesalahan Saat Menyimpan Data');

        }

    }

    public function get_pembayaran(Request $request, $id_pesanan) {

        if($request->session()->exists('email_admin')) {

            $data = DB::table('tbl_pembayaran')->where('id_pesanan', $id_pesanan)->first();

            return response()->json($data);

        } else {

            return redirect()->route('login_admin')->with('fail', 'Harap Login Terlebih Dahulu');

        }

    }
}
