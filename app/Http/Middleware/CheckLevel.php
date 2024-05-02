<?php 
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckLevel extends Middleware {
    public function handle (Request $request, Closure $next, $level){
        if(!Auth::check() || Auth::user()->level !== $level){
            abort(403, 'Unauthorized action');
        }
        return $next($request);
    }
}