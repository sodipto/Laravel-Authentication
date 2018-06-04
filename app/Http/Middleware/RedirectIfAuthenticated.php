<?php


namespace App\Http\Middleware;


use Closure;
use Illuminate\Support\Facades\Auth;


class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        // if (Auth::guard($guard)->check()) {
        //     return redirect('/home');
        // }

         switch ($guard) {
        case 'admin':
          if (Auth::guard($guard)->check()) {
           return redirect()->route('Admin.dashboard');
             //return redirect('/admin/dashboard');
          }
          break;
          // case 'User':
          // if (Auth::guard($guard)->check()) {
          //   return redirect('/home');
          // }
          // break;
          // case 'consultant':
          // if (Auth::guard($guard)->check()) {
          //   return redirect()->route('consultant.dashboard');
          // }
          // break;
        default:
          if (Auth::guard($guard)->check()) {
              return redirect('/');
          }
          break;
      }

        return $next($request);
    }
}
