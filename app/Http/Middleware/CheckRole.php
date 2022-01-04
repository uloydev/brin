<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        $isReviewer = Auth::user()->is_reviewer;
        if (isset($role)) {
            if ($role == 'reviewer' and $isReviewer) {
                return $next($request);
            } else if ($role == 'user' and ! $isReviewer) {
                // dd($role, $isReviewer);
                return $next($request);
            }
        }
        return redirect()->route('login');
    }
}