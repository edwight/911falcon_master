 <?php

use Illuminate\Database\Seeder;
use App\Models\Estado;
class EstadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estado::create(['entidad' =>'Distrito Capital']);
        Estado::create(['entidad' =>'Amàzonas']);
        Estado::create(['entidad' =>'Anzoategui ']);
        Estado::create(['entidad' =>'Apure']);
        Estado::create(['entidad' =>'Aragua']);
        Estado::create(['entidad' =>'Barinas']);
        Estado::create(['entidad' =>'Bolìvar']);
        Estado::create(['entidad' =>'Carabobo']);
        Estado::create(['entidad' =>'Cojedes']);
        Estado::create(['entidad' =>'Delta Amacuro']);
        Estado::create(['entidad' =>'Falcòn']);

        Estado::create(['entidad' =>'Guàrico']);
        Estado::create(['entidad' =>'Lara']);
        Estado::create(['entidad' =>'Mèrida']);
        Estado::create(['entidad' =>'Bolivariano de Miranda']);
        Estado::create(['entidad' =>'Monagas']);
        Estado::create(['entidad' =>'Nueva Esparta']);
        Estado::create(['entidad' =>'Portuguesa']);
        Estado::create(['entidad' =>'Sucre']);
        Estado::create(['entidad' =>'Tàchira']);
        Estado::create(['entidad' =>'Trujillo']);
        Estado::create(['entidad' =>'Yaracuy']);

        Estado::create(['entidad' =>'Zulia']);
        Estado::create(['entidad' =>'Vargas']);
        Estado::create(['entidad' =>'Dependencia Federales']);
    }
}
