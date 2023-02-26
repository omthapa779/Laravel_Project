<?php

namespace App\Http\Middleware;

use App\Http\Middleware\IsLoggedIn;

use Closure;
use Illuminate\Http\Request;

class CheckIfLoggedIn
{
    public function handle($request, Closure $next)
    {
        $isLoggedIn = new IsLoggedIn;
        return $isLoggedIn->handle($request, $next);
    }
}
