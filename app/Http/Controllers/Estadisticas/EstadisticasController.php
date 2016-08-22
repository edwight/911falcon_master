<?php

namespace App\Http\Controllers\Estadisticas;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Contacto;
use App\Models\Motivo;
use App\Models\Organismo;
use Carbon\Carbon;
use DateTime;
use App\Models\Llamada;
use App\Models\Caso;
use App\Models\Estado;
use App\Models\Municipio;

class EstadisticasController extends Controller
{

    public function getUltimoDiaMes($elAnio,$elMes) {
        return date("d",(mktime(0,0,0,$elMes+1,1,$elAnio)-1));
    }
    public function registros_mes($anio,$mes)
    {
        $primer_dia=1;
        $ultimo_dia=$this->getUltimoDiaMes($anio,$mes);
        $fecha_inicial=date("Y-m-d H:i:s", strtotime($anio."-".$mes."-".$primer_dia) );
        $fecha_final=date("Y-m-d H:i:s", strtotime($anio."-".$mes."-".$ultimo_dia) );
        $usuarios=User::whereBetween('created_at', [$fecha_inicial,  $fecha_final])->get();
        $ct=count($usuarios);

        for($d=1;$d<=$ultimo_dia;$d++){
            $registros[$d]=0;     
        }

        foreach($usuarios as $usuario){
        $diasel=intval(date("d",strtotime($usuario->created_at) ) );
        $registros[$diasel]++;    
        }

        $data=array("totaldias"=>$ultimo_dia, "registrosdia" =>$registros);
        return  json_encode($data);
    }

	public function fecha()
    {

    //$contactos = Contacto::where('fecha_at','2015-08-12')->get(); 
    //$contactos = Contacto::where('fecha_at', '>', Carbon::now())->get();
    //$contactos = Contacto::whereBetween('fecha_at', array(new DateTime('2016-02-22'), new DateTime('2015-09-12')))->get();
    	
    //$contactos = Contacto::where('cedula', '4556129365')->get();
    $contactos = Contacto::where('fecha_at','<','2015-10-04')->get();
	//$contactos = Contacto::orderBy('id', 'desc')->get();
	    foreach($contactos as $contacto){
	    	print('<br>'.$contacto->id.' | '.$contacto->fecha_at);
	    }

	}
	public function user()
    {

    //$contactos = Contacto::where('fecha_at','2015')->where('fecha_at', '2016')->get(); 
    //$contactos = Contacto::where('fecha_at', '>', Carbon::now())->get();
    $conctatos = Contacto::whereBetween('fecha_at', array(new DateTime('2016-02-22'), new DateTime('2015-09-12')));

	//$contactos = Contacto::all();
	    foreach($conctatos as $contacto){
	    	print('<br>'.$contacto->id);
	    }

	}
	public function motivos()
    {

    //$contactos = Contacto::where('fecha_at','2015')->where('fecha_at', '2016')->get(); 
    //$contactos = Contacto::where('fecha_at', '>', Carbon::now())->get();
    //$conctatos = Contacto::all();
    //$motivos = Motivo::find(15);
    $motivo = Motivo::find(1);
    return  'hay '.$motivo->contactos()->count().' casos de '.$motivo->motivo.' ';
	//$contactos = Contacto::all();
	    foreach($motivos->contactos() as $contacto){
	    	print('<br>'.$contacto->id);
	    }

	}
	public function municipios()
    {

   	$contactos = Contacto::where('municipio_id','5')->where('motivo_id', '15')->get(); 

   	foreach($contactos as $contacto){
	    	print('<br>'.' hay '.$contacto->count().' casos de '.$contacto->motivo->motivo.' en '.$contacto->municipio->municipio.' ');
	    }
	} 

    public function organismosReporteTotal()
    {
        //$organismos = Organismo::find(12)->with('contactos')->where('updated_at','>=', '2016-08-18 00:00:00')->get();
        
        $organismos = Organismo::has('contactos')->get();
        //$posts = Post::has('comments', '>=', 3)->get(); 
        //return $organismos->count();
        return view('estadisticas.tableOrganismos', compact('organismos'));
    }

    public function organismosReporteHoy()
    {
        //funciona bien
        $organismos = Organismo::all();
        foreach ($organismos as $organismo) {
            $organismoA[$organismo->id] = Organismo::find($organismo->id)->contactos()->where('contacto_organismo.updated_at','>=', Carbon::today())->get();
        }
        /*
        foreach ($organismos as $organismo) {
            print($organismo->siglas.' cantidad '.$organismoA[$organismo->id]->count());
        }
        */
        return view('estadisticas.tableOrganismosHoy', compact('organismos','organismoA'));   
    }
    public function organismosReporteBusqueda()
    {
        //
        //$organismos = Organismo::has('contactos')->get(); 
        //return view('estadisticas.tableOrganismos', compact('organismos'));
    }

    public function MotivosReporteTotal()
    {
        $motivos = Motivo::has('contactos')->get(); 
        return view('estadisticas.tableMotivoTotal', compact('motivos'));  
    }
    public function MotivosReporteHoy()
    {
        $motivos = Motivo::all();
        foreach ($motivos as $motivo) {
            $motivoA[$motivo->id] = Motivo::find($motivo->id)->contactos()->where('contactos.updated_at','>=', Carbon::today())->get();
        }
        //funciona mal
        return view('estadisticas.tableMotivoHoy', compact('motivos','motivoA'));  
    }
    public function EstadosReporteTotal()
    {
        $estados = Estado::has('contactos')->get(); 
        return view('estadisticas.tableEstadosTotal', compact('estados'));  
    }
    public function EstadosReportehoy()
    {
        $estados = Estado::all();
        foreach ($estados as $estado) {
            $estadoA[$estado->id] = Estado::find($estado->id)->contactos()->where('contactos.updated_at','>=', Carbon::today())->get();
        }
        return view('estadisticas.tableEstadosHoy', compact('estados','estadoA'));  
    }
    public function MunicipiosReporteTotal()
    {

        $municipios = Municipio::has('contactos')->get(); 
        return view('estadisticas.tableMunicipiosTotal', compact('municipios'));  
    }
    public function MunicipiosReportehoy()
    {
        $municipios = Municipio::all();
        foreach ($municipios as $municipio) {
            $municipioA[$municipio->id] = Municipio::find($municipio->id)->contactos()->where('contactos.updated_at','>=', Carbon::today())->get();
        }
        $contactos = Contacto::where('created_at','>=', Carbon::today())->get(); 
        return view('estadisticas.tableMunicipiosHoy', compact('contactos','municipios','municipioA'));  
    }
    public function OrganismosEstadosReporteTotal()
    {

        $organismosestados = Estado::with('organismos')->get(); 
        return view('estadisticas.tableMunicipiosHoy', compact('organismosestados'));  
    }
    public function LlamadasReporteTotal()
    {
        $registradas = Llamada::sum('registradas'); 
        $falsas = Llamada::sum('falsas'); 
        $sabotaje = Llamada::sum('sabotaje'); 
        $informativas = Llamada::sum('informativas');
        $total = $registradas + $informativas + $falsas + $sabotaje;
        return view('estadisticas.tableLlamadastotal', compact('registradas','falsas','informativas','sabotaje','total'));  
    }
    public function LlamadasReporteHoy()
    {
        $fecha = Carbon::today();
        $registradas = Llamada::where('created_at','>=',$fecha)->sum('registradas'); 
        $falsas = Llamada::where('created_at','>=',$fecha)->sum('falsas'); 
        $sabotaje = Llamada::where('created_at','>=',$fecha)->sum('sabotaje'); 
        $informativas = Llamada::where('created_at','>=',$fecha)->sum('informativas');
        $total = $registradas + $informativas + $falsas + $sabotaje;
        return view('estadisticas.tableLlamadastotal', compact('registradas','falsas','informativas','sabotaje','total'));  
    }
    public function CasosReporteTotal()
    {
        $efectivos = Caso::sum('efectivos'); 
        $sinefecto = Caso::sum('sinefecto'); 
        $noatendida = Caso::sum('noatendida'); 
        $repetida = Caso::sum('repetida');
        $total = $efectivos + $sinefecto + $noatendida + $repetida;
        return view('estadisticas.tableCasosTotal', compact('efectivos','sinefecto','noatendida','repetida','total'));  
    }
    public function CasosReporteHoy()
    {
        $efectivos = Caso::where('created_at','>=',$fecha)->sum('efectivos'); 
        $sinefecto = Caso::where('created_at','>=',$fecha)->sum('sinefecto'); 
        $noatendida = Caso::where('created_at','>=',$fecha)->sum('noatendida'); 
        $repetida = Caso::where('created_at','>=',$fecha)->sum('repetida');
        $total = $efectivos + $sinefecto + $noatendida + $repetida;
        return view('estadisticas.tableCasosTotal', compact('efectivos','sinefecto','noatendida','repetida','total'));  
    }
    public function reporteMunicipiosMotivos($id)
    {
         
        $municipiosM = Municipio::find($id);
        return view('estadisticas.tableMunicipioMotivo', compact('municipioM'));
    }
    public function reporteMunicipiosOrganismos()
    {
        $municipiosM = Municipio::find($id);
        return view('estadisticas.tableMunicipioMotivo', compact('municipioM'));
    }
    public function municipiosMotivos()
    {
    
        //motivos por municipios
        //$llamadas = Llamada::where('updated_at','>=', Carbon::today())->get(); 
        $municipios = Contacto::where('municipio_id','1')->where('motivo_id','6')->get(); 
        $motivos = Motivo::find('6');
        //return $llamadas->id;
        print 'hay '.$municipios->count().' casos de '.$motivos->motivo.'<br>';
    }
}
