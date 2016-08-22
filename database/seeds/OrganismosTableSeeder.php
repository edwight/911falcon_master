<?php

use Illuminate\Database\Seeder;
use App\Models\Organismo;
class OrganismosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Organismo::create(['siglas' => 'POLIFALCON','nombre'=>'POLICIA DEL ESTADO','telefono'=>'02687920110']);
      Organismo::create(['siglas' => 'POLIMIRANDA','nombre'=>'POLICIA MUNICIPAL DE MIRANDA','telefono'=>'02682521795']);
      Organismo::create(['siglas' => 'GNB','nombre'=>'GUARDIA NACIONAL BOLIVARIANA','telefono'=>'02682517599']);
      Organismo::create(['siglas' => 'POLICARIRUBANA','nombre'=>'POLICIA DE CARIRUBANA','telefono'=>'02692202746']);
      Organismo::create(['siglas' => 'PNB','nombre'=>'POLICIA NACIONAL BOLIVARIANA','telefono'=>'']);

       Organismo::create(['siglas' => 'Hidrofalcon','nombre'=>'HIDROFALCON','telefono'=>'02687920110']);
       Organismo::create(['siglas' => 'Coorpoelect','nombre'=>'Coorpoelect','telefono'=>'02687920110']);
       Organismo::create(['siglas' => 'Otros Organismos','nombre'=>'Otros Organismos','telefono'=>'02687920110']);
       Organismo::create(['siglas' => 'C.I.C.P.C','nombre'=>'CUERPO DE INVESTIGACIONES CIENTIFICAS PENALES Y CRIMINALISTICAS','telefono'=>'']);
       Organismo::create(['siglas' => '171','nombre'=>'171 EMRGENCIAS EDO FALCON']);
       Organismo::create(['siglas' => 'SSCF','nombre'=>'SECRETARIA DE SEGURIDAD CIUDADANA','telefono'=>'02682512021']);
       Organismo::create(['siglas' => 'TRANSITO','nombre'=>'CUERPO TECNICO DE VIGILANCIA DEL TRANSPORTE TERRESTRE','telefono'=>'02682512021']);
      
       Organismo::create(['siglas' => 'P.C. MUNICIPAL','nombre'=>'PROTECCION CIVIL MIRANDA','telefono'=>'04125131516']);
       Organismo::create(['siglas' => 'P.C. REGIONAL','nombre'=>'PROTECCION CIVIL DEL ESTADO FALCON','telefono'=>'02682511859']);
       
       Organismo::create(['siglas' => 'BOMBEROS','nombre'=>'BOMBEROS DEL ESTADO FALCON']);
       Organismo::create(['siglas' => 'GUARDA COSTA','nombre'=>'BASE NAVAL']);
       
       Organismo::create(['siglas' => 'ZODI','nombre'=>'ZODI FALCON','telefono'=>'']);
       Organismo::create(['siglas' => 'TRIBUNAL MILITAR','nombre'=>'TRIBUNAL MILITAR DEL ESTADO FALCON','telefono'=>'']);
       Organismo::create(['siglas' => 'Ministerio Publico','nombre'=>'Ministerio Publico','telefono'=>'']);
       Organismo::create(['siglas' => 'DIM','nombre'=>'Direccion regional de inteligencia militar','telefono'=>'']);
       Organismo::create(['siglas' => 'SEBIN','nombre'=>'SEBIN','telefono'=>'04129544970']);
       Organismo::create(['siglas' => 'SIIPOL','nombre'=>'SIIPOL','telefono'=>'']);
       Organismo::create(['siglas' => 'POLICIA NAVAL','nombre'=>'POLICIA NAVAL','telefono'=>'04127907506']);
       Organismo::create(['siglas' => 'CC Policial  ZONA 1','nombre'=>'CC Policial  ZONA 1','telefono'=>'']);


    }
}
