<?php namespace Bantenprov\RetribusiOnline\Http\Middleware;

use Closure;

/**
 * The RetribusiOnlineMiddleware class.
 *
 * @package Bantenprov\RetribusiOnline
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class RetribusiOnlineMiddleware
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
