<?php

namespace App\Helper;

use Illuminate\Support\Facades\Crypt;


class CryptHelper
{
    static function diEnkrip($id)
    {
        return Crypt::encrypt($id);
    }

    static function diDekrip($id)
    {
        return Crypt::decrypt($id);
    }
}
