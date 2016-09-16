<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
class Organismos
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
        
        switch ($this->auth->user()->organismo_id) {
            case '1':
                # POLIFALCON
                return redirect()->to('admin/despacho');
            break;
            case '2':
                # POLIMIRANDA
                return redirect()->to('admin/despacho');
            break;
            case '10':
                # 171
                return redirect()->to('admin/despacho');
            break;
            case 'operador':
                # code...
                return redirect()->to('admin/despacho');
            break;
            default:
                # code...
                break;
        }   
        return $next($request);
    }
}
