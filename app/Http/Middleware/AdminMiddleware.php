<?php

namespace App\Http\Middleware;
use Illuminate\Contracts\Auth\Guard;

use Closure;
use App\AllTutorial;
use App\VedioLessons;
use App\team;
use App\tutorial;
use Auth;
use App\User;

class AdminMiddleware
{
   

    public function handle($request, Closure $next)
    {

        if (Auth::check()) {
            foreach ($request->user()->roles as $role) {
              if ($role->name == 'Admin' ) {
                return $next($request);
            }
            
            }
            return redirect()->back();
        }
         return redirect('/login');
        
    }
}
