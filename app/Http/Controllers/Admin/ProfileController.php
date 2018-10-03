<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index(Request $request, $id_admin) {

        if($request->session()->exists('email_admin')) {

            $data = DB::table('tbl_admin')->where('id_admin', $id_admin)->first();

            return view('admin.profile_admin', ['data_admin' => $data]);

        } else {

            return redirect()->route('login_admin');

        }

    }

    public function ganti_password(Request $request, $id_admin) {

        if($request->has('simpan')) {

            $validasi = Validator::make($request->all(), [
                'password_lama'         => 'required|alpha_num|max:18',
                'password_baru'         => 'required|alpha_num|max:18|confirmed',
                'password_confirmation' => 'required|alpha_num|max:18'
            ]);

            $data = DB::table('tbl_admin')->where('id_admin', session('id_admin'))->first();

            if ($validasi->fails()) {

                return back()->withErrors($validasi);

            }

            if($data->password === $request->input('password_lama')) {

                DB::table('tbl_admin')->where('id_admin', $id_admin)->update([
                    'password'  => Hash::make($request->input('password_baru'), [
                        'memory' => 1024,
                        'time' => 2,
                        'threads' => 2,
                    ]),
                ]);

                return redirect()->route('profile_admin')->with('success', 'Password Berhasil Di Ganti');

            } else {

                return back()->withErrors('Password Lama Yang Anda Masukan Salah!');

            }

        } else {

            return back()->withErrors('Terjadi Kesalahan Saat Menyimpan Harap Gunakan Tombol Simpan Untuk Menyimpan Data');

        }

    }
}
