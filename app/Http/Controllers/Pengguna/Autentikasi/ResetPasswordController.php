<?php

namespace App\Http\Controllers\Pengguna\Autentikasi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResetPasswordController extends Controller
{
    public function index(Request $request) {

        return false;
    }

    public function lupa_password(Request $request) {

        $data = DB('tbl_pengguna')->where('email', $request->input('email'));

        if ($data->exists()) {

            

        }

    }
}
