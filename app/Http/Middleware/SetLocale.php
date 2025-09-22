<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocale
{
    /** @var string[] */
    private array $supported = ['en','ua','es','ru'];

    public function handle(Request $request, Closure $next)
    {
        $urlLocale = $request->route('locale');

        // :   URL -     en
        if (!in_array($urlLocale, $this->supported, true)) {
            $urlLocale = 'en';
        }

        // IMPORTANT:
        // - URL  /ua
        // -  Laravel locale   ua,    uk.
        //   JSON-  resources/lang/ua.json   'ua'.
        app()->setLocale($urlLocale);

        return $next($request);
    }
}
