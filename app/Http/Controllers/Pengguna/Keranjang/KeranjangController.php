<?php

namespace App\Http\Controllers\Pengguna\Keranjang;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use function GuzzleHttp\json_encode;

class KeranjangController extends Controller
{

    public function index(Request $request) {

        $data = DB::table('tbl_keranjang')->where('id_pengguna', session('id_pengguna'))->get();
        
        return view('pengguna.keranjang.keranjang', ['data_keranjang', $data]);
    }

    public static function count_keranjang() {
        $data = DB::table('tbl_keranjang')
                ->select(DB::raw('count(id_pengguna) as jumlah_keranjang'))
                ->where('id_pengguna', session('id_pengguna'))
                ->first();
        return $data->jumlah_keranjang;
    }

    public function get_provinsi() {

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://api.rajaongkir.com/starter/province",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "key: 1a84ef0ff7cac9bb764f1087e64da8d3"
            ],
        ]);

        return json_encode(curl_exec($curl), JSON_PRETTY_PRINT);
    }
}
