<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Grupo;
use App\Http\Controllers\Controller;

class GruposController extends Controller
{
    public function index()
	{
		$grupos = Grupo::all();
		//mostrar la lista de post
		//$tags = Tag::all();
		return View('admin.grupos.index', compact('grupos'));
	}
	public function create()
	{
		return View('admin.grupos.create');
	}
	public function store(Request $request)
	{

		 $this->validate($request, [
            'grupos' => 'required',
            ]);
		
		$name = $request->input('grupos'); 
		$grupo = new Grupo;
		$grupo->name = $name;
		$grupo->save();
		return redirect('admin/grupos');
	}
	public function show()
	{
		return View('admin.grupos.show');
	}
}
