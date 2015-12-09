<?php

namespace hotelMoche\Http\Middleware;
use Illuminate\Contracts\Auth\Guard;

use Session;
use Closure;

class Habitacion
{
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if( $this->auth->User()->tipo != 'admin'  )
        {
            Session::flash('message-error','No tiene privilegios');
            return redirect()->to('/habitacion');
        }
        return $next($request);
    }
}
