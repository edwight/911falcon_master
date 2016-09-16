<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
//use Hash;
use App\Http\Requests;
use App\Models\User;
use App\Models\Grupo;
use App\Models\Organismo;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Facades\Datatables;

use Illuminate\Support\Facades\File;

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
    public function getList()
    {
        $users = User::all();
        ///$orders = Organismo::find(1)->with('contactos','contactos.motivo','contactos.direccion')->get();
        return Datatables::of($users)->make(true);
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
            'organismos' => 'required',
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
        $file = $request->file('photo');
        //$sexo = '0';
        
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
        $user->organismo_id = $organismos;
        if ($file)
        {
            $file->move('public/imgs/users/', $file->getClientOriginalName());
            $user->foto = '/imgs/users/'.$file->getClientOriginalName();
            $user->save();
        }
        $user->save();

        $grupos = Grupo::find($grupo);
		$grupos->users()->save($user);
        return redirect('admin/users/');
        
    }
	public function edit($id)
	{
		$user = User::findOrFail($id);
        $grupolist = Grupo::all();
        $organismos = Organismo::all();
		return View('admin.user.edit', compact('user','grupolist','organismos'));
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
        $file = $request->file('photo');
        //$file = Request::file('filefield');
        //$sexo = '0';

        $user = User::findOrFail($id);
        $user->name = $name;
        $user->slug = str_slug($name,'-');
        $user->roles = $roles;
        //$user->sexo = $sexo;
        $user->email = $cedula;
        $user->password = $password;
        $user->phone = $phone;
        $user->organismo_id = $organismos;
        if($file)
        {
            //$fileName = $photo->getClientOriginalName();
            //$photo->move('public/imgs/users/', $fileName);
            
            //$extension = $file->getClientOriginalExtension();
            //Storage::disk('local')->put($file->getClientOriginalName().'.'.$extension,  File::get($file));
            $file->move('public/imgs/users/', $file->getClientOriginalName());
            $user->foto = '/imgs/users/'.$file->getClientOriginalName();
            $user->save();
        }
        $user->save();

        if($grupo)
        {
            $grupos = Grupo::find($grupo);
            $grupos->users()->save($user);
        }
        //

        /*
        if ($organismos) {
            $organismo = Organismo::find($organismos);
            $organismo->users()->attach($user);
        }
        */
        return redirect('admin/users/');
    }
}
