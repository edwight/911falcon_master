<?php

use Illuminate\Database\Seeder;
use App\Models\Parroquia;
class ParroquiasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	Parroquia::create(['parroquia' => 'San Juan de los Cayos','estado_id'=>'11','municipio_id'=>'01','ubigeom_id'=>'1101','ubigeop_id'=>'110101']);
        Parroquia::create(['parroquia' => 'Capadare','estado_id'=>'11','municipio_id'=>'01','ubigeom_id'=>'1101','ubigeop_id'=>'110102']);
        Parroquia::create(['parroquia' => 'La Pastora','estado_id'=>'11','municipio_id'=>'01','ubigeom_id'=>'1101','ubigeop_id'=>'110103']);
        Parroquia::create(['parroquia' => 'Libertador','estado_id'=>'11','municipio_id'=>'01','ubigeom_id'=>'1101','ubigeop_id'=>'110104']);


        Parroquia::create(['parroquia' => 'San Luis','estado_id'=>'11','municipio_id'=>'02','ubigeom_id'=>'1102','ubigeop_id'=>'110201']);
        Parroquia::create(['parroquia' => 'Aracua','estado_id'=>'11','municipio_id'=>'02','ubigeom_id'=>'1102','ubigeop_id'=>'110202']);
        Parroquia::create(['parroquia' => 'La Peña','estado_id'=>'11','municipio_id'=>'02','ubigeom_id'=>'1102','ubigeop_id'=>'110203']);
        

         
        Parroquia::create(['parroquia' => 'Capatárida','estado_id'=>'11','municipio_id'=>'03','ubigeom_id'=>'1103','ubigeop_id'=>'110301']);
        Parroquia::create(['parroquia' => 'Bariro','estado_id'=>'11','municipio_id'=>'03','ubigeom_id'=>'1103','ubigeop_id'=>'110302']);
        Parroquia::create(['parroquia' => 'Borojó','estado_id'=>'11','municipio_id'=>'03','ubigeom_id'=>'1103','ubigeop_id'=>'110303']);    
		Parroquia::create(['parroquia' => 'Guajiro','estado_id'=>'11','municipio_id'=>'03','ubigeom_id'=>'1103','ubigeop_id'=>'110304']);
        Parroquia::create(['parroquia' => 'Seque','estado_id'=>'11','municipio_id'=>'03','ubigeom_id'=>'1103','ubigeop_id'=>'110305']);
        Parroquia::create(['parroquia' => 'Zazárida','estado_id'=>'11','municipio_id'=>'03','ubigeom_id'=>'1103','ubigeop_id'=>'110306']);


        Parroquia::create(['parroquia' => 'Carirubana','estado_id'=>'11','municipio_id'=>'05','ubigeom_id'=>'1105','ubigeop_id'=>'110501']);
        Parroquia::create(['parroquia' => 'Norte','estado_id'=>'11','municipio_id'=>'05','ubigeom_id'=>'1105','ubigeop_id'=>'110502']);
        Parroquia::create(['parroquia' => 'Punta Cardón','estado_id'=>'11','municipio_id'=>'05','ubigeom_id'=>'1105','ubigeop_id'=>'110503']);
		Parroquia::create(['parroquia' => 'Santa Ana','estado_id'=>'11','municipio_id'=>'05','ubigeom_id'=>'1105','ubigeop_id'=>'110504']);


		Parroquia::create(['parroquia' => 'La Vela de Coro','estado_id'=>'11','municipio_id'=>'06','ubigeom_id'=>'1106','ubigeop_id'=>'110601']);
		Parroquia::create(['parroquia' => 'Acurigua','estado_id'=>'11','municipio_id'=>'06','ubigeom_id'=>'1106','ubigeop_id'=>'110602']);
        Parroquia::create(['parroquia' => 'Guaibacoa','estado_id'=>'11','municipio_id'=>'06','ubigeom_id'=>'1106','ubigeop_id'=>'110603']);
		Parroquia::create(['parroquia' => 'Las Calderas','estado_id'=>'11','municipio_id'=>'06','ubigeom_id'=>'1106','ubigeop_id'=>'110604']);
		Parroquia::create(['parroquia' => 'Macoruca','estado_id'=>'11','municipio_id'=>'06','ubigeom_id'=>'1106','ubigeop_id'=>'110605']);


		Parroquia::create(['parroquia' => 'Pedregal','estado_id'=>'11','municipio_id'=>'08','ubigeom_id'=>'1108','ubigeop_id'=>'110801']);
		Parroquia::create(['parroquia' => 'Agua Clara','estado_id'=>'11','municipio_id'=>'08','ubigeom_id'=>'1108','ubigeop_id'=>'110802']);
        Parroquia::create(['parroquia' => 'Avaria','estado_id'=>'11','municipio_id'=>'08','ubigeom_id'=>'1108','ubigeop_id'=>'110803']);
		Parroquia::create(['parroquia' => 'Piedra Grande','estado_id'=>'11','municipio_id'=>'08','ubigeom_id'=>'1108','ubigeop_id'=>'110804']);
		Parroquia::create(['parroquia' => 'Purureche','estado_id'=>'11','municipio_id'=>'08','ubigeom_id'=>'1108','ubigeop_id'=>'110805']);


		Parroquia::create(['parroquia' => 'Pueblo Nuevo','estado_id'=>'11','municipio_id'=>'09','ubigeom_id'=>'1109','ubigeop_id'=>'110901']);
		Parroquia::create(['parroquia' => 'Adícora','estado_id'=>'11','municipio_id'=>'09','ubigeom_id'=>'1109','ubigeop_id'=>'110902']);
		Parroquia::create(['parroquia' => 'Baraived','estado_id'=>'11','municipio_id'=>'09','ubigeom_id'=>'1109','ubigeop_id'=>'110903']);
		Parroquia::create(['parroquia' => 'Buena Vista','estado_id'=>'11','municipio_id'=>'09','ubigeom_id'=>'1109','ubigeop_id'=>'110904']);
		Parroquia::create(['parroquia' => 'Jadacaquiva','estado_id'=>'11','municipio_id'=>'09','ubigeom_id'=>'1109','ubigeop_id'=>'110905']);
		Parroquia::create(['parroquia' => 'Moruy','estado_id'=>'11','municipio_id'=>'09','ubigeom_id'=>'1109','ubigeop_id'=>'110906']);
		Parroquia::create(['parroquia' => 'Adaure','estado_id'=>'11','municipio_id'=>'09','ubigeom_id'=>'1109','ubigeop_id'=>'110907']);   
		Parroquia::create(['parroquia' => 'El Hato','estado_id'=>'11','municipio_id'=>'09','ubigeom_id'=>'1109','ubigeop_id'=>'110908']);
		Parroquia::create(['parroquia' => 'El Vínculo','estado_id'=>'11','municipio_id'=>'09','ubigeom_id'=>'1109','ubigeop_id'=>'110909']);
        
		

		Parroquia::create(['parroquia' => 'Churuguara','estado_id'=>'11','municipio_id'=>'10','ubigeom_id'=>'1110','ubigeop_id'=>'111001']);
		Parroquia::create(['parroquia' => 'Agua Larga','estado_id'=>'11','municipio_id'=>'10','ubigeom_id'=>'1110','ubigeop_id'=>'111002']);
        Parroquia::create(['parroquia' => 'El Paují','estado_id'=>'11','municipio_id'=>'10','ubigeom_id'=>'1110','ubigeop_id'=>'111003']);
		Parroquia::create(['parroquia' => 'Independencia','estado_id'=>'11','municipio_id'=>'10','ubigeom_id'=>'1110','ubigeop_id'=>'111004']);
		Parroquia::create(['parroquia' => 'Mapararí','estado_id'=>'11','municipio_id'=>'10','ubigeom_id'=>'1110','ubigeop_id'=>'111005']);


		Parroquia::create(['parroquia' => 'Jacura','estado_id'=>'11','municipio_id'=>'11','ubigeom_id'=>'1111','ubigeop_id'=>'111101']);
		Parroquia::create(['parroquia' => 'Agua Linda','estado_id'=>'11','municipio_id'=>'11','ubigeom_id'=>'1111','ubigeop_id'=>'111102']);
        Parroquia::create(['parroquia' => 'Araurima','estado_id'=>'11','municipio_id'=>'11','ubigeom_id'=>'1111','ubigeop_id'=>'111103']);
        

        Parroquia::create(['parroquia' => 'Los Taques','estado_id'=>'11','municipio_id'=>'12','ubigeom_id'=>'1112','ubigeop_id'=>'111201']);
		Parroquia::create(['parroquia' => 'Judibana','estado_id'=>'11','municipio_id'=>'12','ubigeom_id'=>'1112','ubigeop_id'=>'111202']);


		Parroquia::create(['parroquia' => 'Mene de Mauroa','estado_id'=>'11','municipio_id'=>'13','ubigeom_id'=>'1113','ubigeop_id'=>'111301']);
        Parroquia::create(['parroquia' => 'Casigua','estado_id'=>'11','municipio_id'=>'13','ubigeom_id'=>'1113','ubigeop_id'=>'111302']);
        Parroquia::create(['parroquia' => 'San Félix','estado_id'=>'11','municipio_id'=>'13','ubigeom_id'=>'1113','ubigeop_id'=>'111303']);


		Parroquia::create(['parroquia' => 'San Antonio','estado_id'=>'11','municipio_id'=>'14','ubigeom_id'=>'1114','ubigeop_id'=>'111401']);
		Parroquia::create(['parroquia' => 'San Gabriel','estado_id'=>'11','municipio_id'=>'14','ubigeom_id'=>'1114','ubigeop_id'=>'111402']);
		Parroquia::create(['parroquia' => 'Santa Ana','estado_id'=>'11','municipio_id'=>'14','ubigeom_id'=>'1114','ubigeop_id'=>'111403']);
        Parroquia::create(['parroquia' => 'Guzmán Guillermo','estado_id'=>'11','municipio_id'=>'14','ubigeom_id'=>'1114','ubigeop_id'=>'111404']);
        Parroquia::create(['parroquia' => 'Mitare','estado_id'=>'11','municipio_id'=>'14','ubigeom_id'=>'1114','ubigeop_id'=>'111405']);
        Parroquia::create(['parroquia' => 'Río Seco','estado_id'=>'11','municipio_id'=>'14','ubigeom_id'=>'1114','ubigeop_id'=>'111406']);
        Parroquia::create(['parroquia' => 'Sabaneta','estado_id'=>'11','municipio_id'=>'14','ubigeom_id'=>'1114','ubigeop_id'=>'111407']);
        

        Parroquia::create(['parroquia' => 'Chichiriviche','estado_id'=>'11','municipio_id'=>'15','ubigeom_id'=>'1115','ubigeop_id'=>'111501']);
		Parroquia::create(['parroquia' => 'Boca de Tocuyo','estado_id'=>'11','municipio_id'=>'15','ubigeom_id'=>'1115','ubigeop_id'=>'111502']);
        Parroquia::create(['parroquia' => 'Tocuyo de la Costa','estado_id'=>'11','municipio_id'=>'15','ubigeom_id'=>'1115','ubigeop_id'=>'111503']);


        Parroquia::create(['parroquia' => 'Cabure','estado_id'=>'11','municipio_id'=>'17','ubigeom_id'=>'1117','ubigeop_id'=>'111701']);
        Parroquia::create(['parroquia' => 'Colina','estado_id'=>'11','municipio_id'=>'17','ubigeom_id'=>'1117','ubigeop_id'=>'111702']);
        Parroquia::create(['parroquia' => 'Curimagua','estado_id'=>'11','municipio_id'=>'17','ubigeom_id'=>'1117','ubigeop_id'=>'111703']);


        Parroquia::create(['parroquia' => 'Píritu','estado_id'=>'11','municipio_id'=>'18','ubigeom_id'=>'1118','ubigeop_id'=>'111801']);
        Parroquia::create(['parroquia' => 'San José de la Costa','estado_id'=>'11','municipio_id'=>'18','ubigeom_id'=>'1118','ubigeop_id'=>'111802']);


        Parroquia::create(['parroquia' => 'Tucacas','estado_id'=>'11','municipio_id'=>'20','ubigeom_id'=>'1120','ubigeop_id'=>'112001']);
        Parroquia::create(['parroquia' => 'Boca de Aroa','estado_id'=>'11','municipio_id'=>'20','ubigeom_id'=>'1120','ubigeop_id'=>'112002']);
        

		Parroquia::create(['parroquia' => 'Sucre','estado_id'=>'11','municipio_id'=>'21','ubigeom_id'=>'1121','ubigeop_id'=>'112101']);
        Parroquia::create(['parroquia' => 'Pecaya','estado_id'=>'11','municipio_id'=>'21','ubigeom_id'=>'1121','ubigeop_id'=>'112102']);
        

        Parroquia::create(['parroquia' => 'Santa Cruz de Bucaral','estado_id'=>'11','municipio_id'=>'23','ubigeom_id'=>'1123','ubigeop_id'=>'112301']);
        Parroquia::create(['parroquia' => 'El Charal','estado_id'=>'11','municipio_id'=>'23','ubigeom_id'=>'1123','ubigeop_id'=>'112302']);
        Parroquia::create(['parroquia' => 'Las Vegas del Tuy','estado_id'=>'11','municipio_id'=>'23','ubigeom_id'=>'1123','ubigeop_id'=>'112303']);

        
        Parroquia::create(['parroquia' => 'Urumaco','estado_id'=>'11','municipio_id'=>'24','ubigeom_id'=>'1124','ubigeop_id'=>'112401']);
 		Parroquia::create(['parroquia' => 'Bruzual','estado_id'=>'11','municipio_id'=>'24','ubigeom_id'=>'1124','ubigeop_id'=>'112402']);


 		Parroquia::create(['parroquia' => 'Puerto Cumarebo','estado_id'=>'11','municipio_id'=>'25','ubigeom_id'=>'1125','ubigeop_id'=>'112501']);
        Parroquia::create(['parroquia' => 'La Ciénaga','estado_id'=>'11','municipio_id'=>'25','ubigeom_id'=>'1125','ubigeop_id'=>'112502']);
        Parroquia::create(['parroquia' => 'La Soledad','estado_id'=>'11','municipio_id'=>'25','ubigeom_id'=>'1125','ubigeop_id'=>'112503']);
        Parroquia::create(['parroquia' => 'Pueblo Cumarebo','estado_id'=>'11','municipio_id'=>'25','ubigeom_id'=>'1125','ubigeop_id'=>'112504']);
        Parroquia::create(['parroquia' => 'Zazárida','estado_id'=>'11','municipio_id'=>'25','ubigeom_id'=>'1125','ubigeop_id'=>'112505']);




    }
}
