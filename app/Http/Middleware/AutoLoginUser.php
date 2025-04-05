<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AutoLoginUser
{
    /**
     * ローカルでは管理アカウントで自動ログイン
     *
     * @param [type] $request
     * @param Closure $next
     * @return void
     */
    public function handle($request, Closure $next)
    {
        if (!auth()->check()) {
            Auth::guard('web')->loginUsingId(1);
        }

        return $next($request);
    }
}
