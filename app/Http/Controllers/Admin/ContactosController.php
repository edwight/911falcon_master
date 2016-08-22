<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Contacto;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactosController extends Controller
{
    public function index()
	{
		$contactos = Contacto::all();
		return View('admin.contacto.index', compact('contactos'));
	}
}
