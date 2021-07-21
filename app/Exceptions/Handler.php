<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * Lista wyjątków, które nie są zgłoszone
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * Lista wejść, które nigdy nie są pokazywane dla wyjątków walidacji.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Zarejestruj wywołania zwrotne obsługi wyjątków dla aplikacji.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
}
