<?php

namespace App\Http\Controllers;

use App\Services\CryptoService;

class CryptoController extends Controller
{
    public function generateSecrets()  {
        if (config('app.debug') === true) {
            $crypto = new CryptoService();
            $secrets = $crypto->generateSecrets();
            return view('generateKey', ['secrets' => $secrets]);
        }
         abort(404);
    }
}
