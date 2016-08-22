<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Organismo;
use App\Http\Controllers\Controller;

class OrganismosController extends Controller
{
    public function index()
	{
		$organismo = Organismo::all();
		//mostrar la lista de post
		//$tags = Tag::all();
		return View('admin.organismos.index', compact('organismo'));
	}
	public function create()
	{
		return View('admin.organismos.create');
	}
	public function store(Request $request)
    {

        $this->validate($request, [
            'nombre' => 'required',
            'siglas' => 'required',
            'telefono' => 'numeric',
            ]);

       //return $request->all();
        $nombre = $request->input('nombre');//required
        $siglas = $request->input('siglas');
        $telefono = $request->input('telefono');


        $organismos = New Organismo;
        $organismos->nombre = $nombre;
        $organismos->siglas = $siglas;
        $organismos->telefono = $telefono;

        $organismos->save();
        

        return redirect('admin/organismos/');
        
    }
}
