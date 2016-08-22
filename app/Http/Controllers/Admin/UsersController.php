<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
//use Hash;
use App\Http\Requests;
use App\Models\User;
use App\Models\Grupo;
use App\Models\Organismo;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index()
	{
		$user = User::orderBy('id', 'DESC')->get();
		//mostrar la lista de post
		//$tags = Tag::all();
        $admin = User::where('roles','admin')->get()->count();
        $despachador = User::where('roles','despachador')->get()->count();
        $operador = User::where('roles','operador')->get()->count();
        $supervisor = User::where('roles','supervisor')->get()->count();
		return View('admin.user.index', compact('user','admin','despachador','operador','supervisor'));
	}
	public function create()
	{
		$grupolist = Grupo::all();
        $organismos = Organismo::all();
		return View('admin.user.create',compact('grupolist','organismos'));
	}
	 public function store(Request $request)
    {
        
        
        $this->validate($request, [
            'nombre' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'phone' => 'numeric|required|unique:users',
            'type' => 'required',
            'grupos' => 'required',
            ]);


       //return $request->all();
        $phone = $request->input('phone');//required
        $name = $request->input('nombre');
        $cedula = $request->input('email');
        $sexo = $request->input('sexo');
        $grupo = $request->input('grupos');
        $organismos = $request->input('organismos');
        $roles = $request->input('type');
        $password = $request->input('password');
        $photo = $request->file('photo');
        //$sexo = '0';
        /*
        if (empty($photo))
        {
            $fileName = $photo->getClientOriginalName();
            $filename = Str::slug($fileName).'.'.File::extension($fileName);
            $photo->move('public/imgs/users', $filename);
        }
        else{
            $filename ='public/imgs/users/avatar.png';
        }
        */
        
        $user = New User;
        $user->name = $name;
        $user->slug = str_slug($name,'-');
        $user->roles = $roles;
        //$user->sexo = $sexo;
        $user->email = $cedula;
        $user->status = '1';
        //$user->photo = $filename;
        $user->password = $password;
        $user->phone = $phone;
        $user->save();

        $grupos = Grupo::find($grupo);
		$grupos->users()->save($user);
        
        $organismo = Organismo::find($organismos);

        $organismo->users()->attach($user);
        
        return redirect('admin/users/');
        
    }
	public function edit($id)
	{
		$user = User::findOrFail($id);
        $grupolist = Grupo::all();
        $organismos = Organismo::all();
        $organismoss = $user->organismos->first();
		return View('admin.user.edit', compact('user','grupolist','organismos','organismoss'));
	}
	public function show($id)
	{
		//admin/1
		$user = User::findOrFail($id);
		return View('admin.user.show', compact('user'));
	}
	public function update(Request $request, $id)
    {
        
        $this->validate($request, [
            'type' => 'required',
            'grupos' => 'required',
            ]);

        /*
         if(empty($photo))
        {
            $fileName = $photo->getClientOriginalName();
            $filename = Str::slug($fileName).'.'.File::extension($fileName);
            $photo->move('public/imgs/users', $filename);
        }
        else{
            $filename ='public/imgs/users/avatar.png';
        }
        */
       //return $request->all();
        $phone = $request->input('phone');//required
        $name = $request->input('nombre');
        $cedula = $request->input('email');
        $sexo = $request->input('sexo');
        $grupo = $request->input('grupos');
        $organismos = $request->input('organismos');
        $roles = $request->input('type');
        $password = $request->input('password');
        $photo = $request->file('photo');
        //$sexo = '0';

        $user = User::findOrFail($id);
        $user->name = $name;
        $user->slug = str_slug($name,'-');
        $user->roles = $roles;
        //$user->sexo = $sexo;
        $user->email = $cedula;
        //$user->photo = $filename;
        //$user->grupos->name = $grupo;
        $user->password = $password;
        $user->phone = $phone;
        $user->save();

        //$grupos = Grupo::find($grupo);
        //$grupos->users()->save($user);

        /*
        if ($organismos) {
            $organismo = Organismo::find($organismos);
            $organismo->users()->attach($user);
        }
        */
        return redirect('admin/users/');
    }
}
