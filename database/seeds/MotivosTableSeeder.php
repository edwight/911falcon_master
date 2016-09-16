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
        
        Motivo::create(['motivo' => 'Accidente de transito (Choque Con Objeto Fijo)','activo'=>'1']);
        Motivo::create(['motivo' => 'Accidente de transito (Daños Materiales)','activo'=>'1']);
        Motivo::create(['motivo' => 'Accidente de transito (Arrollamiento)','activo'=>'1']);
        Motivo::create(['motivo' => 'Accidente de transito (Colision Entre vehiculos)','activo'=>'1']);
        Motivo::create(['motivo' => 'Accidente de transito (Deslizamiento de Moto)','activo'=>'1']);
        Motivo::create(['motivo' => 'Accidente de transito (volcamiento)','activo'=>'1']);
        Motivo::create(['motivo' => 'Accidente tipo aereo','activo'=>'1']);
        Motivo::create(['motivo' => 'Alarma de Banco','activo'=>'1']);
        Motivo::create(['motivo' => 'Alteracion del Orden Publico','activo'=>'1']);
        Motivo::create(['motivo' => 'Ataque Animal','activo'=>'1']);
        Motivo::create(['motivo' => 'Cadaver','activo'=>'1']);
        Motivo::create(['motivo' => 'Contaminación Sónica','activo'=>'1']);
        Motivo::create(['motivo' => 'Emergencia Medicas','activo'=>'1']);
        Motivo::create(['motivo' => 'Estrutura en Peligro','activo'=>'1']);
        Motivo::create(['motivo' => 'Fallecido','activo'=>'1']);
        Motivo::create(['motivo' => 'Fuga de Gas','activo'=>'1']);
        Motivo::create(['motivo' => 'Herido por Arma Blanca','activo'=>'1']);
        Motivo::create(['motivo' => 'Herido por Arma de fuego','activo'=>'1']);
        Motivo::create(['motivo' => 'Herido por Objeto Contundente','activo'=>'1']);
        Motivo::create(['motivo' => 'Hidrofalcón','activo'=>'1']);
        Motivo::create(['motivo' => 'Hurto','activo'=>'1']);
        Motivo::create(['motivo' => 'Incendio de Estrutura','activo'=>'1']);
        Motivo::create(['motivo' => 'Incendio de Maleza','activo'=>'1']);
        Motivo::create(['motivo' => 'Informativa','activo'=>'1']);
        Motivo::create(['motivo' => 'Insulto','activo'=>'1']);
        Motivo::create(['motivo' => 'Invasión','activo'=>'1']);
        Motivo::create(['motivo' => 'Manifestación Pácifica','activo'=>'1']);
        Motivo::create(['motivo' => 'Manifestación Violenta','activo'=>'1']);
        Motivo::create(['motivo' => 'Obstruccion en la via','activo'=>'1']);
        Motivo::create(['motivo' => 'Otros','activo'=>'1']);
        Motivo::create(['motivo' => 'Persona demente','activo'=>'1']);
        Motivo::create(['motivo' => 'Persona en Peligro','activo'=>'1']);
        Motivo::create(['motivo' => 'Persona en Sospechosa','activo'=>'1']);
        Motivo::create(['motivo' => 'Reporte','activo'=>'1']);
        Motivo::create(['motivo' => 'Reporte de Personas','activo'=>'1']);
        Motivo::create(['motivo' => 'Riña Colectiva','activo'=>'1']);
        Motivo::create(['motivo' => 'Robo a Entidad Comercial','activo'=>'1']);
        Motivo::create(['motivo' => 'Robo a Institución','activo'=>'1']);
        Motivo::create(['motivo' => 'Robo a Persona','activo'=>'1']);
        Motivo::create(['motivo' => 'Robo a Vivienda','activo'=>'1']);
        Motivo::create(['motivo' => 'Robo a Vehículo','activo'=>'1']);
        Motivo::create(['motivo' => 'Sabotaje','activo'=>'1']);
        Motivo::create(['motivo' => 'Situación Sospechosa','activo'=>'1']);
        Motivo::create(['motivo' => 'Traslado Medico','activo'=>'1']);
        Motivo::create(['motivo' => 'Vehículo Sospechoso','activo'=>'1']);
        Motivo::create(['motivo' => 'Verificacion Siipol (laminada)','activo'=>'1']);
        Motivo::create(['motivo' => 'Verificacion Siipol (vehiculo)','activo'=>'1']);
        Motivo::create(['motivo' => 'Violencia de Género','activo'=>'1']);
        
    }
}
