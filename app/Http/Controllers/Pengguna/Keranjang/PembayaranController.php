<?php

namespace App\Http\Controllers\Pengguna\Keranjang;

use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PembayaranController extends Controller
{
    public function index(Request $request){

        $data = DB::table('tbl_pembayaran as pembayaran')
            ->join('tbl_pesanan as pesanan', 'pesanan.id_pesanan', 'pembayaran.id_pesanan')
            ->select('pembayaran.*', 'pesanan.total_bayar')
            ->where([
                ['pembayaran.id_pengguna', session('id_pengguna')],
                ['pembayaran.selesai', '0'], ['pembayaran.foto_bukti', '<>', 'NULL']
            ])->get();

        return view('pengguna.pesanan.pembayaran', ['data_pembayaran' => $data]);

    }

    public function upload_bukti(Request $request, $id_pesanan) {

        if (session()->has('email_pengguna')) {

            $data = DB::table('tbl_pembayaran')->where('id_pesanan', $id_pesanan);

            return view('pengguna.pesanan.upload_bukti', ['data_pembayaran', $data]);

        } else {

            return redirect()->route('login')->withErrors('harus login terlebih dahulu');

        }

    }

    public function save_bukti(Request $request, $id_pesanan) {

        if(session()->has('email_pengguna') && $request->has('simpan')) {

            $id_pesanan = decrypt($id_pesanan);

            $validasi = Validator::make($request->all(), [
                'bukti_pembayaran'  => 'required|mimes:jpg,jpeg,png'
            ]);

            if($validasi->fails()) {

                return back()->withErrors($validasi);

            }

            $data = DB::table('tbl_pembayaran')->where('id_pesanan', $id_pesanan);

            if($data->exists() && $data->first()->foto_bukti == NULL) {

                $extension = $request->file('bukti_pembayaran')->getClientOriginalExtension();

                $foto_bukti = Storage::putFileAs(
                    'public/pembayaran/',
                    $request->file('bukti_pembayaran'), $id_pesanan.'.'.$extension
                );

            } else {

                return back()->withErrors('Terjadi Kesalahan Saat Menyimpan Foto');

            }

        } else {

            return redirect()->route('login')->withErrors('harus login terlebih dahulu');

        }

    }
}
