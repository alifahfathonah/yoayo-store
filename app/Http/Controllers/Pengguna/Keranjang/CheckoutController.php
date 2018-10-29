<?php

namespace App\Http\Controllers\Pengguna\Keranjang;

use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{
    public function index(Request $request, $method) {

        if (session()->has('email_pengguna')) {

            $data = DB::table('tbl_keranjang as keranjang')
                ->join('tbl_barang as barang', 'barang.id_barang', 'keranjang.id_barang')
                ->where('keranjang.id_pengguna', session('id_pengguna'));

            if($data->exists()) {

                $d_method = Crypt::decrypt($method);

                if($d_method == "1") {

                    $detail_pengirim = DB::table('tbl_detail_pengguna')->where('id_pengguna', session('id_pengguna'))->first();

                    return view('pengguna.keranjang.checkout', [
                        'data_checkout' => $data->get(),
                        'default'       => $detail_pengirim
                    ]);

                } else if ($d_method == "2") {

                    return view('pengguna.keranjang.checkout', [
                        'data_checkout' => $data->get()
                    ]);

                }

            }

        }

    }

    public function save_checkout(Request $request) {

        if(session()->has('email_pengguna')) {

            $id_pengguna = session('id_pengguna');
            $id_pesanan  = $this->set_id_pesanan();
            $req = $request->all();

            $validasi = Validator::make($req, [
                'nama_penerima' => 'required|regex:/^[a-zA-Z\w]*$/|max:50',
                'alamat_tujuan' => 'required|string',
                'no_telepon'    => 'required|regex:/^[0-9\-\w\+]*$/|max:20',
                'keterangan'    => 'nullable|string',
                'layanan'       => 'required|alpha',
                'ongkos_kirim'  => 'required|integer',
            ]);

            if($validasi->fails()){

                return back()->withErrors($validasi);

            }

            $keranjang = DB::table('tbl_keranjang')->where('id_pengguna', $id_pengguna);

            if($keranjang->exists()){

                $save_pesanan = DB::table('tbl_pesanan')->insert([
                    'id_pesanan'    => $id_pesanan,
                    'id_pengguna'   => $id_pengguna,
                    'nama_penerima' => $req->nama_penerima,
                    'alamat_tujuan' => $req->alamat_tujuan,
                    'no_telepon'    => $req->no_telepon,
                    'keterangan'    => !is_null($req->keterangan) ? NULL : $req->keterangan,
                    'layanan'       => $req->layanan,
                    'ongkos_kirim'  => $req->ongkir,
                    'total_bayar'   => $keranjang->sum('subtotal_biaya'),
                ]);

                if($save_pesanan == True) {

                    foreach ($keranjang->get() as $item) {

                        $barang = DB::table('tbl_barang')->where('id_barang', $item->id_barang)->first();

                        DB::table('tbl_detail_pesanan')->insert([
                            'id_pesanan'     => $id_pesanan,
                            'id_barang'      => $item->id_barang,
                            'jumlah_beli'    => $item->jumlah_beli,
                            'subtotal_berat' => ($item->jumlah_beli * $barang->berat_barang),
                            'subtotal_biaya' => $item->subtotal_biaya
                        ]);

                    }

                } else {

                    DB::table('tbl_pesanan')->where('id_pesanan', $id_pesanan)->delete();

                    return back()->withErrors('Terjadi Kesalahan Saat Memproses Checkout');

                }

            } else {

                return back()->withErrors('Data Keranjang Tidak Ditemukan');

            }

        }

    }

    protected function set_id_pesanan() {

        $data = DB::table('tbl_pesanan')->max('id_pesanan');

        if(!empty($data)) {

            $no_urut = substr($data, 9, 3) + 1;

            return 'PSN'.(new Datetime)->format('ymd').$no_urut;
        } else {
            return 'PSN'.(new Datetime)->format('ymd').'1';
        }
    }
}
