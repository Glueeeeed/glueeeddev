<?php

namespace App\Services;

use ParagonIE\Sodium\Core\Curve25519\Ge\P1p1;
use phpseclib3\Crypt\Random;
class CryptoService
{
    public function generateSecrets() : array {
        $key = Random::string(16);
        $iv = Random::string(16);
        return [
            'key' => base64_encode($key),
            'iv' => base64_encode($iv),
        ];
    }
}
