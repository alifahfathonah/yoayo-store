<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class BerandaController extends Controller
{
    public function index(Request $request) {

        if($request->session()->exists('email_admin')) {

            return view('admin.beranda');

        } else {

            return redirect()->route('login_admin');

        }

    }
}
