<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardsController extends Controller
{
    public function index()
	{
		$user = User::count();
		$operador = User::where('roles','operador')->get()->count();
		$despacho = User::where('roles','despachador')->get()->count();
		$supervisor = User::where('roles','supervisor')->get()->count();
		$admin = User::where('roles','admin')->get()->count();
		return View('admin.dashboard.index',compact('user','operador','supervisor','despacho','admin'));
	}
}
