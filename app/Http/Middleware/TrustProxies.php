<?php

namespace App\Http\Middleware;

use Fideloper\Proxy\TrustProxies as Middleware;
use Illuminate\Http\Request;

class TrustProxies extends Middleware
{
    /**
     * Zaufane serwery proxy dla tej aplikacji.
     *
     * @var array|string|null
     */
    protected $proxies;

    /**
     * Nagłówki, które powinny być używane do wykrywania serwerów proxy.
     *
     * @var int
     */
    protected $headers = Request::HEADER_X_FORWARDED_ALL;
}
