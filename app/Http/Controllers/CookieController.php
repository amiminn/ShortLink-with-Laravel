<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class CookieController extends Controller
{
    public function setC(Request $request): Response
    {
        return response('set cookie')->cookie('sesiku', 'baru masuk', 100);
    }

    public function getC(Request $request): JsonResponse
    {
        return response()->json([
            'status' => 'ok',
            'getSesi' => $request->cookie('sesiku')
        ]);
    }

    public function remC(Request $request): Response
    {
        return response('cleared')->withoutCookie('sesiku');
    }
}
