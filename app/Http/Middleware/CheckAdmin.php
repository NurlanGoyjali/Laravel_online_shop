<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\If_;

class CheckAdmin
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


        $userRole = Auth::user()->roles->pluck('name');
        If(!$userRole->contains('admin')){

            return redirect(route('login'))->with('error','giriş izniniz yok');

        }

        return $next($request);

    }
}
