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
        // $keranjang = DB::table('tbl_keranjang')->where('id_pengguna', 'PGN1809201');
        //
        // echo $keranjang->sum('subtotal_biaya');
        echo Carbon::tomorrow();
    }

    public function test(Request $request) {
        $simpan = Storage::putFileAs('public/avatars/admin', $request->file('foto'), 'lalalaa.jpg');
        dump($simpan);
    }
}
