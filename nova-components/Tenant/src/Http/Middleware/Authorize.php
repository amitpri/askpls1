<?php

namespace Askpls\Tenant\Http\Middleware;

use Askpls\Tenant\Tenant;

class Authorize
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Illuminate\Http\Response
     */
    public function handle($request, $next)
    {
        return resolve(Tenant::class)->authorize($request) ? $next($request) : abort(403);
    }
}
