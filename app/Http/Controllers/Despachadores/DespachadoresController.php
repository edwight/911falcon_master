<?php

namespace App\Http\Controllers\Despachadores;

use Illuminate\Http\Request;
use App\Models\Contacto;
use App\Models\User;
use App\Models\Caso;
use App\Models\Direccion;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class DespachadoresController extends Controller
{
    public function index()
    {
    	$contacto = Contacto::orderBy('id','desc')->paginate(15);
        /*
        foreach ($contacto as $contactos) {
            print($contactos->id);
            print($contactos->organismo->siglas);
        }
        */
        return view('despachadores.index',compact('contacto'));
    }
    public function show($id)
    {
        $contacto = Contacto::find($id);
        $organismos = $contacto->organismos->first();
        //$organismos = Organismo::with('contactos')->where('contactos_id',$id)->first();;
        $user = Auth::id();
        $casos = Caso::where('user_id',$user)->orderBy('id','desc')->first();
        return view('despachadores.Advanced',compact('contacto','user','casos','organismos'));
    }
    public function store(Request $request)
    {
        
        //$user = $request->input('user_id');//required
        $user = Auth::id();
        $users = User::find($user);
        //$date = Carbon::now(); //2015-01-01 00:00:00

        $direccionh = $request->input('direccionh');//required
        $observacion = $request->input('observacion');//required
        $contactoh = $request->input('contactoh');//required
        $status = $request->input('status');//required
       // return $statush;  //defaut  0


        //$fecha = Carbon::now()->toDateTimeString();
        $fecha = Carbon::today();
        $submit = $request->input('submit');//required
        //$llamadas = Llamada::where('created_at', $fecha)->first();
        //$llamadas = Llamada::whereDay('created_at', '=', date('d'));
        $casos = Caso::where('user_id','=',$user)->whereDate('created_at', '=', Carbon::today()->toDateString())->first();
        //dd($llamadas);
        //return $llamadas->id;
        if ($casos) {
            //$llamada = Llamada::find();
            switch ($submit) {
                case 'efectivo':
                    Caso::where("user_id", $user)->increment("efectivos");
                    $users->casos()->save($casos);
                    break;
                case 'sinefecto':
                    Caso::where("user_id", $user)->increment("sinefecto");
                    $users->casos()->save($casos);
                    break;
                case 'noatendida':
                    //$llamadas->increment('quejas');
                    Caso::where("user_id", $user)->increment("noatendida");
                    $users->casos()->save($casos);
                    break;
                case 'repetida':                        
                    Caso::where("user_id", $user)->increment("repetida");
                    $users->casos()->save($casos);
                    break;
                case 'apoyo':                        
                    Caso::where("user_id", $user)->increment("apoyo");
                    $users->casos()->save($casos);
                    break;
                default:
                    # code...
                    break;
            }
        }
        else{

            $caso = new Caso;
            //Llamada::create(['registradas' => 0,'falsas' => 0,'quejas' => 0]);
            switch ($submit) {
                case 'efectivo':
                   // $suma += 1
                    $caso->efectivos = 1;
                    $users->casos()->save($caso);
                    break;
                case 'sinefecto':
                    $llamada->sinefecto = 1;
                    $users->casos()->save($caso);
                    return redirect('admin/despacho');
                    break;
                case 'noatendida':
                    $caso->noatendida = 1;
                    $users->casos()->save($caso);
                    break;
                case 'repetida':                      
                    $caso->repetida = 1;
                    $users->casos()->save($caso);
                    break;
                case 'apoyo':                      
                    $caso->apoyo = 1;
                    $users->casos()->save($caso);
                    break;

                default:
                    # code...
                    break;
            }
            
            // return 'false '.$llamadas->created_at;
        }

        //return $contactoh;

        if($status)
        {
            $direccion = Direccion::find($direccionh);
            $direccion->observacion = $observacion;
            $direccion->save();
            return redirect('admin/despacho');
        }
        else{
            $contactos = Contacto::find($contactoh);
            $contactos->status ='1';
            $contactos->save();


            $users = User::find($user);

            $users->contactos()->attach($contactos);

            

            $direccion = Direccion::find($direccionh);
            $direccion->observacion = $observacion;
            $direccion->save();
            

            return redirect('admin/despacho');
        }
    
    }
}
