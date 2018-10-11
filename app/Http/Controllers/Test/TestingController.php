<?php

namespace App\Http\Controllers\Test;

use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class TestingController extends Controller
{
    public function index(Request $request)
    {
        // $length = strlen(Crypt::encryptString('Muhammad Iqbal'));
        // echo $length;
        // if($request->get('token')){ echo decrypt($request->get('token')); }

        // $test = str_random(18);
        // echo $test.'<br>';
        // echo encrypt($test);

        // if($request->get('insert') == 'true') {
        //     DB::table('tbl_pengguna')->insert([
        //         'id_pengguna' => 'PGN1809202',
        //         'email'       => 'miqbal.1997@gmail.com',
        //         'password'    => Crypt::encryptString('pengguna456'),
        //     ]);
        // }

        // $data = DB::table('tbl_pengguna')->select(DB::raw('max(id_pengguna) as id_pengguna'))->first();
        // echo substr($data->id_pengguna, 9, 4);

        // $data = DB::table('tbl_pengguna')
                // ->select(DB::raw('count(id_pengguna) as jumlah_keranjang'))
                // ->where('id_pengguna', session('id_pengguna'))
        //         ->first();
        // var_dump($data); die;

        // if(session()->exists('id_pengguna')) {
        //     echo 'Berhasil';
        // } else {
        //     echo 'Gagal';
        // }

        // $data = DB::table('tbl_merk')->where('nama_merk', 'test')->exists();
        // $table = ['barang', 'kategori', 'merk', 'pengguna', 'admin', 'pesanan', 'pembayaran', 'pengiriman'];

        // $data = [];

        // foreach($table as $key) {

        //     if($key == 'pengiriman') {
        //         $data['jml_'.$key] = DB::table('tbl_pesanan')->select('id_pesanan')->count();
        //     } else {
        //         $data['jml_'.$key] = DB::table('tbl_'.$key)->count();
        //     }
        // }

        // echo json_encode($data, JSON_PRETTY_PRINT);

        // echo Crypt::encryptString('admin123');

        // echo asset('storage/avatars/admin/muhammad_iqbal.jpg');
        // $test = 'lala';

        // echo (empty($test) ? true : false);

        // $data =DB::table('tbl_admin')->where('id_admin', 'AD1809251')->first();
        // dd($data);

        // $data = DB::table('tbl_merk')->max('id_merk');

        // if(!empty($data)) {

        //     $no_urut = substr($data, 9, 3) + 1;

        //     return 'MRK'.(new Datetime)->format('ymd').$no_urut;
        // } else {
        //     return 'MRK'.(new Datetime)->format('ymd').'1';
        // }

        // return view('test');

        // Storage::delete('public/admin/image/produk/BRG1809301.jpg');

        // $data = 'test123';
        // echo \str_replace('[0-9]', '', $data);

        // $data = DB::table('tbl_admin')->where('id_admin', 'ADM1809251');

        // dd([$data->first()->foto, $data->get()]);

        // $data = DB::table('tbl_pengguna as akun')
        //         ->join('tbl_detail_pengguna as detail', 'detail.id_pengguna', 'akun.id_pengguna')
        //         ->select('akun.id_pengguna', 'akun.email', 'akun.tanggal_bergabung', 'detail.*')
        //         ->where('akun.id_pengguna', 'PGN1809201')->first();
        // dd($data);
        echo (new DateTime)->format('Y-m-d H:m:s');
        // return view('sample_email', ['user' => 'muhammad iqbal', 'email' => 'miqbal.1337@gmail.com', 'password' => str_random(13)]);
    }

    public function test(Request $request) {
        $simpan = Storage::putFileAs('public/avatars/admin', $request->file('foto'), 'lalalaa.jpg');
        dump($simpan);
    }
}
