<?php

namespace App\Http\Controllers\Estadisticas;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Contacto;
use App\Models\Motivo;
use App\Models\Organismo;
use App\Models\Cuadrante;
use Carbon\Carbon;
use DateTime;
use App\Models\Llamada;
use App\Models\Caso;
use App\Models\Estado;
use App\Models\Municipio;

class EstadisticasController extends Controller
{
    
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
    public function organismosReporteBusqueda(Request $request)
    {
        //funciona bien
        $fechaStart = $request->input('fechaStart');//required
        $fechaEnd = $request->input('fechaEnd');//required
        $organismos = Organismo::all();
        foreach ($organismos as $organismo) {
            $organismoA[$organismo->id] = Organismo::find($organismo->id)->contactos()->whereBetween('contacto_organismo.created_at', array(new DateTime($fechaStart), new DateTime($fechaEnd)))->get();
            //where('contacto_organismo.created_at','>=', $fechaStart )->get();
        }
        return view('estadisticas.tableOrganismosHoy', compact('organismos','organismoA'));  
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
    public function cuadranteDetail($id)
    {
        return 'prueba';
        return view('estadisticas.cuadrantes.show');  
    }
    public function reporteCuadranteMotivos()
    {
       $cuadrantes = Cuadrante::all();
        foreach ($cuadrantes as $cuadrante) {
            $cuadranteA[$cuadrante->id] = Cuadrante::find($cuadrante->id)->motivos()->where('created_at','>=', Carbon::today())->get();
        }
        return view('estadisticas.tableCuadranteMotivoHoy', compact('cuadrantes','cuadranteA'));  
    }
    public function reporteCuadranteContactos()
    {
     $cuadrantes = Cuadrante::all();
    foreach ($cuadrantes as $cuadrante) {
        $cuadranteA[$cuadrante->id] = Cuadrante::find($cuadrante->id)->contactos()->where('contacto_cuadrante.created_at','>=', Carbon::today())->get();
    }
    return view('estadisticas.tableCuadranteContactos', compact('cuadrantes','cuadranteA'));  
    }

    
}
