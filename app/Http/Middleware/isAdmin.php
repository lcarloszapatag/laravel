<?php
// en donde se encuentra
namespace App\Http\Middleware;

use Closure;
// nombre de la clase
class isAdmin
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
        $ip =$request->ip();
        if ($ip == '192.168.10.1'){
            return $next($request);
        }

       return  redirect('/');
       
    }
}
