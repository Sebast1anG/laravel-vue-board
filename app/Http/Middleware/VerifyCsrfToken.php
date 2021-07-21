<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * Identyfikatory URI, które powinny być wyłączone z weryfikacji CSRF.
     *
     * @var array
     */
    protected $except = [
        'upcoming/*',
        'dailytask/*'
    ];
}
