<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class MemberMiddleware
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
        if (Auth::check()) {
            if ((Auth::user()->level == 3)) {
                if (is_null(Auth::user()->coach_id)) {
                    return redirect(route('member_select_coach'));
                }
                return $next($request);
            } elseif ((Auth::user()->level == 1)) {
                return redirect('/admin');
            } elseif ((Auth::user()->level == 2)) {
                return redirect('/coach');
            }
        }
        return redirect('/');
    }
}
