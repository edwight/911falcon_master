<?php

use Illuminate\Database\Seeder;
use App\Models\Motivo;
class MotivosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Motivo::create(['motivo' => 'robo a entidad Comercial']);
        Motivo::create(['motivo' => 'Robo a mano armada']);
        Motivo::create(['motivo' => 'Robo a Persona']);
        Motivo::create(['motivo' => 'Robo a Viviendas']);
        Motivo::create(['motivo' => 'Robo a Vehiculo']);
        Motivo::create(['motivo' => 'Robo']);
        Motivo::create(['motivo' => 'Hurto frustrado']);
        Motivo::create(['motivo' => 'Hurto de vehiculo']);
        Motivo::create(['motivo' => 'Hurto de moto']);
        Motivo::create(['motivo' => 'Hurto']);

        Motivo::create(['motivo' => 'Reporte']);
        Motivo::create(['motivo' => 'Reporte de Persona']);

        Motivo::create(['motivo' => 'Homicidio con arma blanca']);
        Motivo::create(['motivo' => 'Homicidio con arma de fuego']);
        Motivo::create(['motivo' => 'Homicidio culposo por accidente de transito']);
        Motivo::create(['motivo' => 'Homicidio doloso por asfixia']);
        Motivo::create(['motivo' => 'Homicidio doloso por inmersion']);
        Motivo::create(['motivo' => 'Homicidio por objetos contundente']);

        Motivo::create(['motivo' => 'Incendios forestales']);
        Motivo::create(['motivo' => 'Incendios']);

        Motivo::create(['motivo' => 'Lesiones leves']);
        Motivo::create(['motivo' => 'Lesiones por accidente de transito']);
        Motivo::create(['motivo' => 'Lesiones por arma blanca']);
        Motivo::create(['motivo' => 'Lesiones por arma de fuego']);
        Motivo::create(['motivo' => 'Lesiones por objetos contundentes']);

        Motivo::create(['motivo' => 'Accidente de transito sin lesionados']);


        Motivo::create(['motivo' => 'Alarma de Banco']);
        Motivo::create(['motivo' => 'Riña Colectiva']);

        
        Motivo::create(['motivo' => 'Verificacion Siipol']);

        
        Motivo::create(['motivo' => 'Persona Sospechosa']);
        Motivo::create(['motivo' => 'Vehiculo Sospechosa']);
        Motivo::create(['motivo' => 'Hidrofalcon']);
        Motivo::create(['motivo' => 'Obtaculo en Via']);
        Motivo::create(['motivo' => 'Informativa']);
        Motivo::create(['motivo' => 'Insulto']);
        Motivo::create(['motivo' => 'Contaminacion Sonica']);
        Motivo::create(['motivo' => 'Estrutura en Peligro ']);
        Motivo::create(['motivo' => 'Emergencia Medica']);
        Motivo::create(['motivo' => 'Traslado Medica']);
        Motivo::create(['motivo' => 'Ataque Animal']);
        
        Motivo::create(['motivo' => 'Abandonada']);
        Motivo::create(['motivo' => 'Invasion']);
        
        Motivo::create(['motivo' => 'Delito contra niño']);
        Motivo::create(['motivo' => 'Ocultamiento de objetos provenientes del delito']);
        Motivo::create(['motivo' => 'Perturbacion del orden publico']);

        Motivo::create(['motivo' => 'Plagio']);
        Motivo::create(['motivo' => 'Porte ilicito de arma de fuego']);
        Motivo::create(['motivo' => 'Resistencia a la autoridad']);
        
        Motivo::create(['motivo' => 'Sabotaje']);
        
       
        Motivo::create(['motivo' => 'Indocumentados']);

        Motivo::create(['motivo' => 'Soborno a funcionario publico']);
        Motivo::create(['motivo' => 'Violencia de genero']);
        Motivo::create(['motivo' => 'Trafico de droga']);
        Motivo::create(['motivo' => 'Violacion']);
        Motivo::create(['motivo' => 'Abigeato']);
        Motivo::create(['motivo' => 'Persona extraviada']);
        
        Motivo::create(['motivo' => 'Ilicito fiscal']);
        Motivo::create(['motivo' => 'Desvalijamiento']);
        Motivo::create(['motivo' => 'Aprovechamiento de vehiculo proveniente del delito']);
        Motivo::create(['motivo' => 'Aprovechamiento de Moto proveniente del delito']);
        Motivo::create(['motivo' => 'Movimientos de tierras']);

        Motivo::create(['motivo' => 'Quema']);
        Motivo::create(['motivo' => 'Caceria ilegal']);
        Motivo::create(['motivo' => 'Contaminacion ambiental']);
        Motivo::create(['motivo' => 'Accidentes acuaticos']);
        
        Motivo::create(['motivo' => 'Rescates en agua']);
        Motivo::create(['motivo' => 'Traslado de ambulancia']);
        
        Motivo::create(['motivo' => 'Actos lascivos']);
        Motivo::create(['motivo' => 'Alteracion de seriales de vehiculo']);
        Motivo::create(['motivo' => 'Amenaza de muerte']);

        Motivo::create(['motivo' => 'Apropiacion indebida']);
        Motivo::create(['motivo' => 'Aprovechamiento de cosas provenientes del delito']);
        Motivo::create(['motivo' => 'Arrollamiento']);
        Motivo::create(['motivo' => 'Contrabando']);
        Motivo::create(['motivo' => 'Corrupcion']);
        Motivo::create(['motivo' => 'Daños a la propiedad']);

        Motivo::create(['motivo' => 'Decomiso de juegos pirotecnicos']);
        Motivo::create(['motivo' => 'Delito informatico']);
        Motivo::create(['motivo' => 'Distribucion de droga']);
        Motivo::create(['motivo' => 'Enriquecimiento ilicito']);
        Motivo::create(['motivo' => 'Especulacion y acaparamiento']);
        Motivo::create(['motivo' => 'Estafa']);

        Motivo::create(['motivo' => 'Extorsion']);
        Motivo::create(['motivo' => 'Forjamiento de documento publico']);
        Motivo::create(['motivo' => 'Fuga de gas']);
        
        
        
       

        Motivo::create(['motivo' => 'Incautacion de droga']);
        Motivo::create(['motivo' => 'Tenencia de droga']);
    }
}
