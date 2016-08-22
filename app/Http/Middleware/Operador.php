<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
class Operador
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function __construct(Guard $auth){
        $this->auth = $auth;
    }
    public function handle($request, Closure $next)
    {
        switch ($this->auth->user()->roles) {
            case 'admin':
                # code...
                //return redirect()->to('/');
            break;
            case 'supervisor':
                # code...
                return redirect()->to('/');
            break;
            case 'despachador':
                # code...
                return redirect()->to('/');
            break;
            case 'operador':
                # code...
                //return redirect()->to('/admin/recepcion/create');
            break;
            default:
                # code...
                break;
        }
        return $next($request);
    }
}
