<?php

namespace App\Http\Middleware;

use Closure;

class ckeckRole
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
        if($request->user()=== null)
        {
            return redirect('/home');
        }

        $actions=$request->route()->getaction();
        $roles=isset($actions['roles'])? $actions['roles']:null;

        if($request->user()->hasAnyRole($roles)||!$roles)
        {
            return $next($request);
        }

        return redirect('/home');
    }
}
