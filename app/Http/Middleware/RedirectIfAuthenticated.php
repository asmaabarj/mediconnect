<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;
    
        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                $role = auth()->user()->role;
                switch ($role) {
                    case 'Admin':
                       
                        return redirect('/admin');
                    case 'Doctor':
                        return redirect('/doctor');
                    case 'Patient':
                        return redirect('/dashboard');
                    default:
                        return redirect(RouteServiceProvider::HOME);
                }
            }
        }
    
        //   abort(401);
        return $next($request);
    }
    
    
}
