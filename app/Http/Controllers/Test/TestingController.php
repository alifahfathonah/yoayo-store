<?php

namespace App\Http\Controllers\Test;

use DateTime;
use Carbon\Carbon;
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
        $data = DB::table('tbl_barang')
            ->join('tbl_kategori', 'tbl_kategori.id_kategori', 'tbl_barang.id_kategori')
            ->join('tbl_merk', 'tbl_merk.id_merk', 'tbl_barang.id_merk')
            ->select('tbl_barang.*', 'tbl_kategori.nama_kategori', 'tbl_merk.nama_merk')
            ->where([
                ['tbl_merk.nama_merk', $request->input('merk')],
                ['tbl_kategori.nama_kategori', $request->input('kategori')]
            ])->get();
        dd($data);
    }

    public function page(Request $request) {

        // return redirect(route('test').'?_user=miqbal.pengguna@email.com&_token='.encrypt('6uv1Dg'));

    }

    public function test(Request $request) {
        $simpan = Storage::putFileAs('public/avatars/admin', $request->file('foto'), 'lalalaa.jpg');
        dump($simpan);
    }
}
