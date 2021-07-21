<?php

namespace App\Http\Middleware;

use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;

class EncryptCookies extends Middleware
{
    /**
    * Nazwy plików cookie, które nie powinny być szyfrowane.
    *     
    * 
    *
     * @var array
     */
    protected $except = [
        //
    ];
}
