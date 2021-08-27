<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Auth\Middleware\Authenticate; # use this illuminate Authenticate in the web.php for the routes

class IsAdminMiddleware
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
       # dd('It Works');

       # verify if the connected user is an admin user
       #we still needed the column "admin" into the "users" 'table'  with a bolean (0 ou 1)
       if (auth()->user()->admin == 1){

           return $next($request);
       }
       else{
           abort(403);
       }
    }
}
