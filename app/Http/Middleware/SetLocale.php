<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        // URL-   {locale}
        $urlLocale = $request->route('locale');
        $supported = ['en','ua','es','ru','uk'];

        //   / ->   /en + 
        if (!$urlLocale || !in_array($urlLocale, $supported, true)) {
            $default = 'en';
            $segments = $request->segments();
            array_unshift($segments, $default);
            return redirect('/' . implode('/', $segments), 302);
        }

        // : /uk/...  /ua/...
        if ($urlLocale === 'uk') {
            $segments = $request->segments();
            $segments[0] = 'ua';
            return redirect('/' . implode('/', $segments), 301);
        }

        //       'uk'
        $internal = $urlLocale === 'ua' ? 'uk' : $urlLocale;

        App::setLocale($internal);

        //  route()/url()   URL-
        URL::defaults(['locale' => $urlLocale]);

        return $next($request);
    }
}
