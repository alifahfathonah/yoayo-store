<?php

namespace App\Http\Controllers\Admin\Superadmin;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PenggunaController extends Controller
{
    public function index(Request $request) {

        if($request->session()->exists('email_admin') && session('superadmin') == true) {

            $data = DB::table('tbl_pengguna')->get();

            return view('admin.superadmin.pengguna.pengguna', ['data_pengguna' => $data]);

        }

    }

    public function block_pengguna(Request $request) {

        if($request->has('simpan') && session('superadmin') == false) {

            $validasi = Validator::make($request->all(), [
                'block' > 'required|boolean'
            ]);

            if($validasi->fails()) {

                return back()->withErrors($validasi);

            }

            DB::table('tbl_admin')->where('id_admin', $id_admin)->update([
                'diblokir' => $request->input('blokir_admin'),
            ]);

            $request->input('blokir_admin') == 1 ? $status = 'Admin Di Blokir' : $status = 'Blokir Admin DI Cabut';

            return redirect()->route('superadmin_admin')->with('success', 'Berhasil '.$status);

        }

        return false;
    }

}
