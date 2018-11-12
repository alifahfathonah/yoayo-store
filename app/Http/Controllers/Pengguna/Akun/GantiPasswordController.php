<?php

namespace App\Http\Controllers\Pengguna\Akun;

use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GantiPasswordController extends Controller
{
    public function index(Request $request) {

        if(session()->has('email_pengguna')) {

            return view('pengguna.akun.ganti_password');

        } else {

            return redirect()->route('login')->withErrors('Harus login terlebih dahulu');

        }

    }
}
