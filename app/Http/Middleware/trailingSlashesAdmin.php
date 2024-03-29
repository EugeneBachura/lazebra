<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;

class trailingSlashesAdmin
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

        if (stripos($url,'Build') !== false) {
            $a = str_replace( "/admin-panel/order", "/constructor-app", $url );
            return Redirect::to($base_url.$a);
        };
        
        return $next($request);
    }
}
