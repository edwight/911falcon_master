<?php

use Illuminate\Database\Seeder;
use App\Models\Municipio;
class MunicipiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Municipio::create(['municipio' => 'ACOSTA','capital'=>'San Juan de los Cayos','latitude'=>'11.1713708935296','longitude'=>'-68.4004926681519','levelzoom'=>'','estado_id'=>'11','ubigeom_id'=>'1101']);

        Municipio::create(['municipio' => 'BOLIVAR','capital'=> '','latitude'=>'', 'longitude'=>'','levelzoom'=>'','estado_id'=>'11','ubigeom_id'=>'1101']);
        Municipio::create(['municipio' => 'BUCHIVACOA','capital'=>'','latitude'=>'', 'longitude'=>'','levelzoom'=>'','estado_id'=>'11','ubigeom_id'=>'1101' ]);
        Municipio::create(['municipio' => 'CACIQUE MANAURE','capital'=>'','latitude'=>'', 'longitude'=>'','levelzoom'=>'','estado_id'=>'11','ubigeom_id'=>'1101' ]);
        
        Municipio::create(['municipio' => 'CARIRUBANA','capital'=>'','latitude'=>'', 'longitude'=>'','levelzoom'=>'','estado_id'=>'11','ubigeom_id'=>'1101' ]);
        Municipio::create(['municipio' => 'COLINA','capital'=>'','latitude'=>'', 'longitude'=>'','levelzoom'=>'' ,'estado_id'=>'11','ubigeom_id'=>'1101']);
		Municipio::create(['municipio' => 'DEMOCRACIA','capital'=>'','latitude'=>'', 'longitude'=>'','levelzoom'=>'','estado_id'=>'11','ubigeom_id'=>'1101']);

        Municipio::create(['municipio' => 'FALCON','capital'=>'','latitude'=>'', 'longitude'=>'','levelzoom'=>'' ,'estado_id'=>'11','ubigeom_id'=>'1101' ]);
        Municipio::create(['municipio' => 'FEDERACION','capital'=>'','latitude'=>'', 'longitude'=>'','levelzoom'=>'','estado_id'=>'11','ubigeom_id'=>'1101'  ]);
        Municipio::create(['municipio' => 'MAUROA','capital'=>'','latitude'=>'', 'longitude'=>'','levelzoom'=>'','estado_id'=>'11','ubigeom_id'=>'1101'  ]);

        Municipio::create(['municipio' => 'MIRANDA','capital'=>'','latitude'=>'', 'longitude'=>'','levelzoom'=>'' ,'estado_id'=>'11','ubigeom_id'=>'1101' ]);
        Municipio::create(['municipio' => 'PETIT','capital'=>'','latitude'=>'', 'longitude'=>'','levelzoom'=>'','estado_id'=>'11','ubigeom_id'=>'1101'  ]);
        Municipio::create(['municipio' => 'SILVA','capital'=>'','latitude'=>'', 'longitude'=>'','levelzoom'=>'' ,'estado_id'=>'11','ubigeom_id'=>'1101' ]);

        Municipio::create(['municipio' => 'ZAMORA','capital'=>'','latitude'=>'', 'longitude'=>'','levelzoom'=>'','estado_id'=>'11','ubigeom_id'=>'1101'  ]);
        Municipio::create(['municipio' => 'DABAJURO','capital'=>'','latitude'=>'', 'longitude'=>'','levelzoom'=>'','estado_id'=>'11','ubigeom_id'=>'1101'  ]);
        Municipio::create(['municipio' => 'MONS. ITURRIZA','capital'=>'','latitude'=>'', 'longitude'=>'','levelzoom'=>'','estado_id'=>'11','ubigeom_id'=>'1101'  ]);

        Municipio::create(['municipio' => 'LOS TAQUES','capital'=>'','latitude'=>'', 'longitude'=>'','levelzoom'=>'','estado_id'=>'11','ubigeom_id'=>'1101'  ]);
        Municipio::create(['municipio' => 'PIRITU','capital'=>'','latitude'=>'', 'longitude'=>'','levelzoom'=>'','estado_id'=>'11','ubigeom_id'=>'1101'  ]);
        Municipio::create(['municipio' => 'UNION','capital'=>'','latitude'=>'', 'longitude'=>'','levelzoom'=>'','estado_id'=>'11','ubigeom_id'=>'1101'  ]);

        Municipio::create(['municipio' => 'SAN FRANCISCO','capital'=>'','latitude'=>'', 'longitude'=>'','levelzoom'=>'' ,'estado_id'=>'11','ubigeom_id'=>'1101' ]);
        Municipio::create(['municipio' => 'JACURA','capital'=>'','latitude'=>'', 'longitude'=>'','levelzoom'=>'','estado_id'=>'11','ubigeom_id'=>'1101'  ]);
        Municipio::create(['municipio' => 'CACIQUE MANAURE','capital'=>'','latitude'=>'', 'longitude'=>'','levelzoom'=>'','estado_id'=>'11','ubigeom_id'=>'1101'  ]);

        Municipio::create(['municipio' => 'PALMA SOLA','capital'=>'','latitude'=>'', 'longitude'=>'','levelzoom'=>'','estado_id'=>'11','ubigeom_id'=>'1101'  ]);
        Municipio::create(['municipio' => 'SUCRE','capital'=>'','latitude'=>'', 'longitude'=>'','levelzoom'=>'' ,'estado_id'=>'11','ubigeom_id'=>'1101' ]);
        Municipio::create(['municipio' => 'URUMACO','capital'=>'','latitude'=>'', 'longitude'=>'','levelzoom'=>'' ,'estado_id'=>'11','ubigeom_id'=>'1101' ]);
        Municipio::create(['municipio' => 'TOCOPERO','capital'=>'','latitude'=>'', 'longitude'=>'','levelzoom'=>'','estado_id'=>'11','ubigeom_id'=>'1101'  ]);
    }
}
