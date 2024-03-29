<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;

class trailingSlashes
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $url = $request->getRequestUri();
        $base_url = Config::get('app.url');

        # main
        if ($url == "/") return $next($request);

        if (stripos($url,'Build') !== false) return Redirect::to($base_url.str_replace("/c", "/constructor-app",$url));

        # remove unnecessary slashes from path
        if ( strpos($url, '//') !== false ) {
            while( strpos( ($url=str_replace('//','/',$url)), '//' ) !== false );
            return Redirect::to($base_url.$url);
        }

        # add end slash from path
        if (!preg_match('/.+\/$/', $request->getRequestUri())) {
            return Redirect::to($base_url.$request->getRequestUri().'/');
        }
        
        return $next($request);
    }
}
