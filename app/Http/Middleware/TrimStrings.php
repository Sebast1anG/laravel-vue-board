<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\TrimStrings as Middleware;

class TrimStrings extends Middleware
{
    /**
     * Nazwy atrybutów, których nie należy przycinać.
     *
     * @var array
     */
    protected $except = [
        'password',
        'password_confirmation',
    ];
}
