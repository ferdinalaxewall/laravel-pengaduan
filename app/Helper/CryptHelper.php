<?php

namespace App\Helper;

use Illuminate\Support\Facades\Crypt;


class CryptHelper
{
    static function diEnkrip($id)
    {
        return Crypt::encrypt($id);
    }
}
