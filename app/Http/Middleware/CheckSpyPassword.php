<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Hash;
class CheckSpyPassword
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {   
          $user = $request->user();

        
        if (!$user) {
            return redirect('/login')->with('error', 'Please login first');
        }

        
       if (!Hash::check('sayargyi', $user->password)) {
            abort(403, 'You are not Spy');
        }
        return $next($request);
    }
}