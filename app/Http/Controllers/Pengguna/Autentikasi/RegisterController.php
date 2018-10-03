<?php

namespace App\Http\Controllers\Pengguna\Autentikasi;

use DateTime;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function index(Request $request) {

        (!$request->session()->exists('email') ? true : redirect()->route('beranda'));

        return view('pengguna.autentikasi.register');
    }

    public function register(Request $request) {

        if($request->input('simpan')) {

            $validasi = Validator::make($request->all(), [
                'nama_lengkap'    => 'required|string|max:30',
                'email'           => 'required|email|max:30',
                'password'        => 'required|alpha_num|max:18|confirmed',
                'password_confirmation' => 'required|alpha_num|max:18',
                'no_telepon'      => 'required|string|max:18'
            ]);

            if($validasi->fails()) {
                return redirect()->route('register')->withErrors($validasi);
            }

            $id_pengguna = $this->set_id_pengguna();

            DB::table('tbl_pengguna')->insert([
                'id_pengguna'   =>  $id_pengguna,
                'email'         =>  $request->input('email'),
                'password'      =>  Hash::make($request->input('password'), [
                                        'memory' => 1024,
                                        'time' => 2,
                                        'threads' => 2,
                                    ]),
            ]);

            DB::table('tbl_detail_pengguna')->insert([
                'id_pengguna'  => $id_pengguna,
                'nama_lengkap' => $request->input('nama_lengkap'),
                'no_telepon'   => $request->input('no_telepon')
            ]);

            return redirect()->route('register')->with('success', 'Registrasi Berhasil');
        }
    }

    protected function set_id_pengguna(){

        $data = DB::table('tbl_pengguna')->select(DB::raw('max(id_pengguna) as id_pengguna'))->first();

        if(!empty($data->id_pengguna)) {
            $no_urut = substr($data->id_pengguna, 9, 3) + 1;

            return 'PGN'.(new Datetime)->format('ymd').$no_urut;
        } else {
            return 'PGN'.(new Datetime)->format('ymd').'1';
        }
    }
}
