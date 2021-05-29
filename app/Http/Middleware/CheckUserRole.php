<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckUserRole
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
        // Get role from user 
        $role = auth()->user()->roles->pluck('name')->first();

        switch ($role) {
            case 'superadmin':
                return redirect()->to('/superadmin');
                break;
            case 'admin':
                return redirect()->to('/admin');
                break;
        }
        
        return $next($request);
    }
}
