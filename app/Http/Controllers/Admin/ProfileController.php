<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
}
