<?php

namespace App\Http\Controllers\Admin\Transaksi;

use DateTime;
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PesananController extends Controller
{
    /**
     * STATUS PESANAN
     * ==============================
     * - 0 => Belum Di Proses
     * - 1 => Telah Di Verifikasi
     * - 2 => Sedang Di Proses
     * - 3 => Telah Di Kirim
     * - 4 => Telah Di Terima
     * - 5 => Selesai
     */

    public function index(Request $request) {

        if($request->session()->exists('email_admin')) {

            $stat_label = [
                'bg-gray', 'bg-info', 'bg-primary',
                'bg-navy', 'bg-orange', 'bg-success'
            ];

            $stat_notif = [
                'Belum Di Proses', 'Telah Di Verifikasi', 'Sedang Di Proses',
                'Telah Di Kirim', 'Telah Di Terima', 'Selesai'
            ];

            $data = DB::table('tbl_pesanan')->get();

            return view('admin.transaksi.pesanan', [
                'data_pesanan'  => $data,
                'stat_label'    => $stat_label,
                'stat_notif'    => $stat_notif
            ]);

        } else {

            return redirect()->route('login_admin')->with('fail', 'Harap Login Terlebih Dahulu');

        }

    }

    public function detail_pesanan(Request $request, $id_pesanan) {

        if($request->session()->exists('email_admin')) {

            $data = DB::table('tbl_pesanan as pesanan')
                ->join('tbl_detail_pesanan as detail', 'detail.id_pesanan', 'pesanan.id_pesanan')
                ->select('pesanan.*', 'detail.*')
                ->where('pesanan.id_pesanan', $id_pesanan)->get();

            return view('admin.transaksi.detail_pesanan', ['data_detail' => $data]);

        } else {

            return redirect()->route('login_admin')->with('fail', 'Harap Login Terlebih Dahulu');

        }

    }

    public function rubah_status(Request $request, $id_pesanan) {

        if($request->has('simpan') == true) {

            $validasi = Validator::make($request->all(), [

                'status_pesanan' => 'required|integer|max:1'

            ]);

            if($validasi->fails()) {

                return back()->withErrors($validasi);

            }

            $data = DB::table('tbl_pesanan')->where('id_pesanan', $id_pesanan);

            if ($request->input('status_pesanan') == 3) {

                $data->update([
                    'status_pesanan'    => $request->input('status_pesanan'),
                    'tanggal_dikirim'   => (new DateTime)->format('Y-m-d H:m:s')
                ]);

            } else if ($request->input('status_pesanan') < 3) {

                $data->update([
                    'status_pesanan'    => $request->input('status_pesanan'),
                    'tanggal_dikirim'   => NULL
                ]);

            }

            return redirect()->route('pesanan_admin')->with('success', 'Status Berhasil DI Rubah');
        }
    }
}
