<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminVerification
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
{
    $user = auth()->user();

    // ila user logged in w role = admin → redirect
    if($user && $user->role === 'admin') {
        return redirect('/');
    }

    // normalement middleware kaysir l next request
    return $next($request);
}
}
