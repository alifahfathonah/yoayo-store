<?php

namespace App\Http\Controllers\Admin\Superadmin;

use DateTime;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index(Request $request) {

        if($request->session()->exists('email_admin') && session('superadmin') == true) {

            $data = DB::table('tbl_admin')->get();

            return view('admin.superadmin.admin.admin', ['data_admin' => $data]);

        } else {

            return redirect()->route('beranda_admin');

        }

    }

    public function tambah_admin(Request $request) {

        if ($request->has('simpan') && session('superadmin') == true) {

            $validasi = Validator::make($request->all(), [
                'nama_lengkap'  => 'required|regex:/^[a-zA-Z\s]*$/|max:40',
                'email'         => 'required|email',
                'password'      => 'required|alpha_num|max:18|confirmed',
                'password_confirmation' => 'required|alpha_num',
                'foto'          => 'nullable|iamge|mimes:jpg,jpeg,png'
            ]);

            if ($validasi->fails()) {

                return back()->withErrors($validasi);

            }

            if ($request->hasFile('foto')) {

                $id_admin = $this->set_id_admin();

                $extension = $request->file('foto')->getClientOriginalExtension();

                $foto_admin = Storage::putFileAs(
                    'public/avatars/admin/',
                    $request->file('foto'), $id_admin.'.'.$extension
                );

            }


            DB::table('tbl_admin')->insert([
                'id_admin'      => $id_admin,
                'nama_lengkap'  => $request->input('nama_lengkap'),
                'email'         => $request->input('email'),
                'password'      => Hash::make($request->input('password'), [
                                        'memory' => 1024,
                                        'time' => 2,
                                        'threads' => 2,
                                    ]),
                'foto'          => $request->hasFile('foto') ? basename($foto_admin) : 'default.png',
            ]);

            return redirect()->route('superadmin_admin')->with('success', 'Akun Admin Berhasil Di Buat');

        } else  {

            return back()->withErrors('Terjadi Kesalahan Saat Menyimpan Data');

        }
    }

    public function edit_admin(Request $request, $id_admin) {

        if ($request->has('simpan') && session('superadmin') == true) {

            $validasi = Validator::make($request->all(), [
                'nama_lengkap'  => 'required|regex:/^[a-zA-Z\s]*$/|max:40',
                'email'         => 'required|email',
                'foto'          => 'nullable|iamge|mimes:jpg,jpeg,png'
            ]);

            if ($validasi->fails()) {

                return back()->withErrors($validasi);

            }

            $data = DB::table('tbl_admin')->select('foto')->where('id_barang', $id_admin)->first();

            if($request->hasFile('foto')) {

                Storage::delete('public/avatars/admin/'.$data->foto);

                $extension = $request->file('foto')->getClientOriginalExtension();

                $save_foto = Storage::putFileAs(
                    'public/avatars/admin/',
                    $request->file('foto'), $id_admin.'.'.$extension
                );

                $foto_admin = basename($save_foto);

            }

            DB::table('tbl_admin')->where('id_admin', $id_admin)->update([
                'nama_lengkap'  => $request->input('nama_lengkap'),
                'email'         => $request->input('email'),
                'foto'          => $request->hasFile('foto') ? $foto_admin : $data->foto,
            ]);

            return redirect()->route('superadmin_admin')->with('success', 'Berhasil Merubah Informasi Admin');

        } else  {

            return back()->withErrors('Terjadi Kesalahan Saat Menyimpan Data');

        }
    }

    public function ubah_status_admin(Request $request, $id_admin) {

        if ($request->has('simpan') && session('superadmin') == true) {

            $validasi = Validator::make($request->all(), [
                'superadmin'  => 'required|boolean',
            ]);

            if ($validasi->fails()) {

                return back()->withErrors($validasi);

            }

            DB::table('tbl_admin')->where('id_admin', $id_admin)->update([
                'superadmin' => $request->input('superadmin'),
            ]);

            return redirect()->route('superadmin_admin')->with('success', 'Status Admin Berhasil Di Rubah');

        } else  {

            return back()->withErrors('Terjadi Kesalahan Saat Menyimpan Data');

        }

    }

    public function hapus_admin(Request $request, $id_admin) {

        if ($request->has('simpan') && session('superadmin') == true) {

            $data = DB::table('tbl_admin')->where('id_admin', $id_admin);

            Storage::delete('public/avatars/admin/'.$data->first()->foto);

            $data->delete();

            return redirect()->route('superadmin_admin')->with('success', 'Akun Admin Berhasil Di Hapus');

        } else  {

            return back()->withErrors('Terjadi Kesalahan Saat Menyimpan Data');

        }

    }

    public function blokir_admin(Request $request, $id_admin) {

        if ($request->has('simpan') && session('superadmin') == true) {

            $validasi = Validator::make($request->all(), [
                'blokir_admin'  => 'required|boolean',
            ]);

            if ($validasi->fails()) {

                return back()->withErrors($validasi);

            }

            DB::table('tbl_admin')->where('id_admin', $id_admin)->update([
                'diblokir' => $request->input('blokir_admin'),
            ]);

            $request->input('blokir_admin') == 1 ? $status = 'Admin Di Blokir' : $status = 'Blokir Admin DI Cabut';

            return redirect()->route('superadmin_admin')->with('success', 'Berhasil '.$status);

        } else  {

            return back()->withErrors('Terjadi Kesalahan Saat Menyimpan Data');

        }

    }

    protected function set_id_admin() {

        $data = DB::table('tbl_admin')->max('id_admin');

        if(!empty($data)) {

            $no_urut = substr($data, 9, 3) + 1;

            return 'ADM'.(new Datetime)->format('ymd').$no_urut;

        } else {

            return 'ADM'.(new Datetime)->format('ymd').'1';

        }
    }
}
