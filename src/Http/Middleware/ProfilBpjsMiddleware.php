<?php namespace Bantenprov\ProfilBpjs\Http\Middleware;

use Closure;

/**
 * The ProfilBpjsMiddleware class.
 *
 * @package Bantenprov\ProfilBpjs
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class ProfilBpjsMiddleware
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $next($request);
    }
}
