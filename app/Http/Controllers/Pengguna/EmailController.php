<?php

namespace App\Http\Controllers\Pengguna;

use Mail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmailController extends Controller
{

    public function lupa_password(Request $request){

        try {

            $pesan = [
                'nama'  => 'Muhammad Iqbal',
                'pesan' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
            ];

            Mail::send('pengguna.email.lupa_password', $pesan, function($message) use ($request) {
                $message->subject('Konfirmasi Lupa Password');
                $message->from('no-reply@yoayostore.com', 'Yoayo Store');
                $message->to('dimas.pengguna@email.com');
            });


        } catch (Exception $err) {

            return response(['status' => 'false', 'errors' => $err->getMessage()]);

        }
    }

    public function verifikasi_register(){
        return false;
    }
}
