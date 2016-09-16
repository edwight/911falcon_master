<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Llamada;
//use App\Publicaciones;
//use App\TipoPublicaciones;
//use App\Pais;

class GraficasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getGrafica($elAnio,$elMes) {
     return Response::json(array('body' => View::make('audit.create'), 'title' => 'My Title'));
    }



}
