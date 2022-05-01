<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redis;

class BioskopController extends Controller
{
    public function beli(): Response
    {
        return response('saya baru beli tiket')->cookie('tiket', 'ini tiket masukku', 90);
    }

    public function masuk(Request $request)
    {
        $see = $request->cookie('tiket');
        return "saya ada tiket pak, jadi saya bisa masuk. ini ${see}";
    }

    public function aula(Request $request)
    {
        $see = $request->cookie('tiket');
        if ($see == null) {
            return "ah saya tidak ada tiket, harus beli tiket nih";
        } else {
            return "pak, ini ${see}. jadi saya masih bisa nonton";
        }
    }

    public function diluar(): Response
    {
        return response('seru kok film nya')->withoutCookie('tiket');
    }
}
