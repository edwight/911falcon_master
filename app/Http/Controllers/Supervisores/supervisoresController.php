<?php

namespace App\Http\Controllers\Supervisores;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Contacto;
use App\Models\User;
use App\Models\Caso;
use App\Models\Direccion;
use App\Models\Cuadrante;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Estado;
use App\Models\Organismo;
use App\Models\Motivo;
use App\Models\Municipio;
use App\Models\Parroquia;


class SupervisoresController extends Controller
{
    public function index()
    {
    	$contacto = Contacto::orderBy('id','desc')->paginate(25);

        return view('supervisores.index', compact('contacto'));
    }
    public function edit($id)
    {
    	$municipios = Municipio::all();
        $parroquias = Parroquia::all();
        $organismoss = Organismo::all();
        $motivos = Motivo::all();
        $estados = Estado::all();

        $contacto = Contacto::find($id);
        //$organismos = $contacto->organismos->first();
        $user = Auth::id();
        //$casos = Caso::where('user_id',$user)->orderBy('id','desc')->first();
        return view('supervisores.edit',compact('contacto','user','casos','municipios','parroquias','motivos','organismoss','organismos','estados'));
    }
    public function update(Request $request, $id)
    {
    	$this->validate($request, [
            'telefono' => 'numeric',
            'cedula' => 'numeric',
            ]);
        
		$direccionh = $request->input('direccionh');//required
	    $observacion = $request->input('observacion');//required
	    $contactoh = $request->input('contactoh');//required

	    $phone = $request->input('telefono');//required
	    $nombre = $request->input('nombre');
	    $cedula = $request->input('cedula');
	    $apellido = $request->input('apellido');

	    $motivo = $request->input('motivo');//required
	    $cuadrante = $request->input('cuadrante');//required
	    $municipio = $request->input('municipio');
	    $parroquia =  $request->input('parroquia');
	    $ubicacion = $request->input('direccion');//required
	    $p_referencia = $request->input('p_referencia');
	    $descripcion = $request->input('descripcion');
	    $organismo = $request->input('organismo');//required
	    $estado = $request->input('estado');//required

	    //return $request->all();//required   

	    $direccion = Direccion::find($direccionh);
	    $direccion->observacion = $observacion;
	    $direccion->save(); 
	 

	    $date = Carbon::now(); //2015-01-01 00:00:00

	    $contacto = Contacto::find($id);
	    $contacto->nombre = $nombre;
	    $contacto->apellido = $apellido;
	    $contacto->cedula = $cedula;
	    $contacto->telefono = $phone;
	    $contacto->status = '0';
	    //$contacto->type = '171';
	    $contacto->fecha_at = $date;
	    //$contacto->direccion = $direccion;

	    $contacto->save();

	    $user = Auth::id();
	    $users = User::find($user);
	    $users->contactos()->attach($contacto);

	    if($estado){
	    	$estados = Estado::find($estado);
	    	$estados->contactos()->save($contacto);
	    }

	    if ($municipio) {
	    	$municipios = Municipio::find($municipio);
	    	$municipios->contactos()->save($contacto);
		}
	    if ($parroquia) {
	        $parroquias = Parroquia::find($parroquia);
	        $parroquias->contactos()->save($contacto);
	    }
	   
	    if ($motivo) {
	   		$motivos = Motivo::find($motivo);
	    	$motivos->contactos()->save($contacto);
	    }
		if (isset($organismo)) 
            {
                foreach ($organismo as $organismoId) 
                {
                    $organismos = Organismo::find($organismoId);
                    $contacto->organismos()->attach($organismos);
                }
            }

        if (isset($cuadrante)) {
            $cuadrantes = Cuadrante::find($cuadrante);
            $cuadrantes->contactos()->attach($contactoh);
            if (isset($motivo)) {
                $motivos = Motivo::find($motivo);
                $cuadrantes = Cuadrante::find($cuadrante);
                $cuadrantes->motivos()->attach($motivos); 
            }
        }

		return redirect('admin/supervisores/despacho');
    }
    public function show()
    {
    	
    }
    public function busquedaDespacho(Request $request){
    	$busqueda = $request->input('table_search');
    	$opcion = $request->input('opcion');
    	//return $fecha = $request->input('fecha');
    	if ($opcion == '1') {
    	 	//busqueda por telefono
    	 	$contacto = Contacto::where('telefono','LIKE','%'.$busqueda.'%')->orderBy('id','desc')->paginate(25);
    	 }
    	elseif ($opcion == '2') {
    	 	//busqueda por nombre
    	 	$contacto = Contacto::where('nombre','LIKE','%'.$busqueda.'%')->orderBy('id','desc')->paginate(25);
    	 }
    	elseif ($opcion == '3') {
    	 	//busqueda por estatus
    	 	$contacto = Contacto::where('status', $busqueda)->orderBy('id','desc')->paginate(25);
    	 }
    	 else{
    	 	$contacto = Contacto::orderBy('id','desc')->paginate(25);
    	 	return view('supervisores.index', compact('contacto'));
    	 }

    	return view('supervisores.index', compact('contacto'));

    }
}
