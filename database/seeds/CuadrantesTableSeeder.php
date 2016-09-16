<?php
use App\Models\Cuadrante;
use Illuminate\Database\Seeder;

class CuadrantesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Cuadrante::create(
         	['cuadrante' => 'P-1',
         	'telefono'=>'0416-610-34-96',
         	'organismo_id'=>'1',//polifalcon
         	'municipio_id'=>'11',//miranda
         	'sectores'=>'PARCELAMIENTO CASTULO MARMOL, PANTANO ABAJO, PARCELAMIENTO JOSEFA CAMEJO.']
         	);
        Cuadrante::create(
         ['cuadrante' => 'P-2',
         	'telefono'=>'0416-610-34-59',
         	'organismo_id'=>'2',//polimiranda
         	'municipio_id'=>'11',//miranda
         	'sectores'=>'LOS ORUMOS, POLIDEPORTIVO, SAN BOSCO, APAMATES, PLAZA, BARRIO LA  CONCORDIA']
         	);
        Cuadrante::create(
		['cuadrante' => 'P-3',
         	'telefono'=>'0416-610-35-01',
         	'organismo_id'=>'2',//polimiranda
         	'municipio_id'=>'11',//miranda
         	'sectores'=>'LA FLORESTA, PARCELAMIENTO RAFAEL, GALLARDO, SANTA ANA.']
         	);
        Cuadrante::create(
		['cuadrante' => 'P-4',
         	'telefono'=>'0416-610-34-97',
         	'organismo_id'=>'1',//polifalcon
         	'municipio_id'=>'11',//miranda
         	'sectores'=>'LA FLORESTA, PARCELAMIENTO RAFAEL, GALLARDO, SANTA ANA.']
         	);
        Cuadrante::create(
		['cuadrante' => 'P-5',
         	'telefono'=>'0416-610-34-57',
         	'organismo_id'=>'1',//polifalcon
         	'municipio_id'=>'11',//miranda
         	'sectores'=>'ZONA INDUSTRIAL, VELITAS VI, VELITAS II, VELITA V, URBANIZACIÓN 480, URBANIZACIÓN SANTA MARÍA, URBANIZACIÓN SANTA PAULA']
         	);
        Cuadrante::create(
		['cuadrante' => 'P-6',
         	'telefono'=>'0416-610-35-17',
         	'organismo_id'=>'3',//gnb
         	'municipio_id'=>'11',//miranda
         	'sectores'=>'PUEBLO NUEVO, 28 DE JULIO NORTE Y SUR, LAS MERCEDES, LA FLORIDA.']
         	);
        Cuadrante::create(
		['cuadrante' => 'P-7',
         	'telefono'=>'0416-610-35-16',
         	'organismo_id'=>'1',//polifalcon
         	'municipio_id'=>'11',//miranda
         	'sectores'=>'LAS GUINEAS, CENTRO CORO, ASOCENTRO, BARRIO SAN NICOLAS, BARRIO LAS PANELAS, BARRIO CURAZAITO.']
         	);
        Cuadrante::create(
		['cuadrante' => 'P-8',
         	'telefono'=>'0416-610-35-15',
         	'organismo_id'=>'1',//polifalcon
         	'municipio_id'=>'11',//miranda
         	'sectores'=>'PANTANO CENTRO, PANTANO ARRIBA, EL CHIPRE, BOBARE NORTE']
         	);
        Cuadrante::create(
		['cuadrante' => 'P-9',
         	'telefono'=>'0416-610-35-09',
         	'organismo_id'=>'2',//polimiranda
         	'municipio_id'=>'11',//miranda
         	'sectores'=>'PARQUE CRISTAL, RESIDENCIAS SOL DE CORO, PARCELAMIENTO CACIQUE BACOA, NUESTRA SEÑORA DE LA COROMOTO, SAN JOSE.']
         	);
        Cuadrante::create(
		['cuadrante' => 'P-10',
         	'telefono'=>'0416-610-34-91',
         	'organismo_id'=>'1',//polifalcon
         	'municipio_id'=>'11',//miranda
         	'sectores'=>'PARCELAMIENTO Y BARRIO CRUZ VERDE, URBANIZACIÓN ANTONIO JOSE DE SUCRE, URBANIZACIÓN JOSEFA CAMEJO']
         	);
        Cuadrante::create(
		['cuadrante' => 'P-11',
         	'telefono'=>'0416-610-48-01',
         	'organismo_id'=>'1',//polifalcon
         	'municipio_id'=>'11',//miranda
         	'sectores'=>'HOSPITAL, MONTE VERDE, URBANIZACIÓN AMPIES, URBANIZACIÓN EL BOSQUE, URBANIZACIÓN EL CAREY']
         	);
        Cuadrante::create(
		['cuadrante' => 'P-12',
         	'telefono'=>'0416-610-52-02',
         	'organismo_id'=>'1',//polifalcon
         	'municipio_id'=>'11',//miranda
         	'sectores'=>'CABUDARE, LOS CLARITOS, URBANIZACIÓN 28 DE JULIO, MONZÓN, LAS MARGARITAS, BOBARE SUR.']
         	);
        Cuadrante::create(
		['cuadrante' => 'P-13',
         	'telefono'=>'0416-610-48-06',
         	'organismo_id'=>'2',//polimiranda
         	'municipio_id'=>'11',//miranda
         	'sectores'=>'BARRIO 5 DE JULIO']
         	);
        Cuadrante::create(
		['cuadrante' => 'P-14',
         	'telefono'=>'0416-610-51-99',
         	'organismo_id'=>'1',//polifalcon
         	'municipio_id'=>'11',//miranda
         	'sectores'=>'URBANIZACIÓN CRUZ VERDE']
         	);
        Cuadrante::create(
		['cuadrante' => 'P-15',
         	'telefono'=>'0416-610-48-03',
         	'organismo_id'=>'2',//polimiranda
         	'municipio_id'=>'11',//miranda
         	'sectores'=>'LOS PEROZOS']
         	);
        Cuadrante::create(
		['cuadrante' => 'P-16',
         	'telefono'=>'0416-610-48-02',
         	'organismo_id'=>'3',//GNB - 132
         	'municipio_id'=>'11',//miranda
         	'sectores'=>'LA CAÑADA, URBANIZACIÓN  MONSEÑOR ITURRIZA, PARCELAMIENTO VICTORIA']
         	);
        Cuadrante::create(
		['cuadrante' => 'P-17',
         	'telefono'=>'0416-610-47-99',
         	'organismo_id'=>'1',//polifarcon
         	'municipio_id'=>'11',//miranda
         	'sectores'=>'URBANIZACIÓN LAS EUGENIAS, URBANIZACIÓN ARISTIDES GALVANI, ZUMURUCUARE']
         	);
        Cuadrante::create(
		['cuadrante' => 'P-18',
         	'telefono'=>'0416-610-48-05',
         	'organismo_id'=>'3',//DESUR CORO
         	'municipio_id'=>'11',//miranda
         	'sectores'=>'URBANIZACIÓN LOS MEDANOS.']
         	);
        Cuadrante::create(
		['cuadrante' => 'P-19',
         	'telefono'=>'0416-610-47-97',
         	'organismo_id'=>'1',//polifalcon
         	'municipio_id'=>'11',//miranda
         	'sectores'=>'LOS LIBERTADORES, CAJUARAO, LA BOMBA, SECTOR LAS HUERTAS']
         	);

        Cuadrante::create(
        ['cuadrante' => 'P-2',
            'telefono'=>'0416-610-47-03',
            'organismo_id'=>'1',//polifalcon
            'municipio_id'=>'5',//carirubana
            'sectores'=>'ANTIGUO AEROPUERTO, LA CHINITA, VILLA DEL MAR, EZEQUIEL ZAMORA, SANTA ROSALÍA']
            );
         Cuadrante::create(
        ['cuadrante' => 'P-3',
            'telefono'=>'0416-610-47-01',
            'organismo_id'=>'1',//polifalcon
            'municipio_id'=>'5',//carirubana
            'sectores'=>'SANTA ELENA, LOS PINOS, ANTONIO JOSE DE SUCRE.']
            );
        Cuadrante::create(
        ['cuadrante' => 'P-4',
            'telefono'=>'0416-610-41-00',
            'organismo_id'=>'1',//polifalcon
            'municipio_id'=>'5',//carirubana
            'sectores'=>'BANCO OBRERO, LAS PIEDRAS, LA BOSTA, NUEVO PUEBLO NORTE Y SUR, LA SALINETA.']
            );
        Cuadrante::create(
            ['cuadrante' => 'P-5',
                'telefono'=>'0416-610-48-00',
                'organismo_id'=>'4',//policaribubana
                'municipio_id'=>'5',//carirubana
                'sectores'=>'CAJA DE AGUA, BRISAS DE SANTA ELENA']
            );
        Cuadrante::create(
        ['cuadrante' => 'P-6',
            'telefono'=>'0416-610-47-98',
            'organismo_id'=>'4',//policaribubana
            'municipio_id'=>'5',//carirubana
            'sectores'=>'TROPICANA, CUJIANA, BARRIO LA ROSA, BARRIO MODELO, BELLA VISTA, BLOQUE VTV.']
            );
        Cuadrante::create(
        ['cuadrante' => 'P-7',
            'telefono'=>'0416-610-48-04',
            'organismo_id'=>'4',//policaribubana
            'municipio_id'=>'5',//carirubana
            'sectores'=>'URB. MARIA AUXILIADORA, SECTOR SAMBIL, SECTOR UNIVERSITARIO, LAS ADJUNTAS.']
            );
        Cuadrante::create(
        ['cuadrante' => 'P-8',
            'telefono'=>'0416-610-44-73',
            'organismo_id'=>'4',//policaribubana
            'municipio_id'=>'5',//carirubana
            'sectores'=>'CARIRUBANA, ANDRES ELOY BLANCO, BARRIO INDUSTRIAL']
            );
        Cuadrante::create(
        ['cuadrante' => 'P-9',
            'telefono'=>'0416-610-44-55',
            'organismo_id'=>'3',//gnb-desur
            'municipio_id'=>'5',//carirubana
            'sectores'=>'CENTRO, BARRIO BOLIVAR, SAN FRANCISCO JAVIER']
            );
        Cuadrante::create(
        ['cuadrante' => 'P-10',
            'telefono'=>'0416-610-44-53',
            'organismo_id'=>'1',//polifalcon
            'municipio_id'=>'5',//carirubana
            'sectores'=>'JOSEFA CAMEJO, SANTA IRENE']
            );
        Cuadrante::create(
        ['cuadrante' => 'P-11',
            'telefono'=>'0416-610-44-68',
            'organismo_id'=>'4',//policalirubana
            'municipio_id'=>'5',//carirubana
            'sectores'=>'LAS MARGARITAS, LA ESMERALDA, LOS CACIQUES, LOS CAPTUS.']
            );
        Cuadrante::create(
        ['cuadrante' => 'P-12',
            'telefono'=>'0416-610-44-72',
            'organismo_id'=>'4',//policaricubana
            'municipio_id'=>'5',//carirubana
            'sectores'=>'EL CARDÓN, LA COLONIA, PARAGUANÁ MALL, CIUDAD FEDERACIÓN.']
            );
        Cuadrante::create(
        ['cuadrante' => 'P-13',
            'telefono'=>'0416-610-44-69',
            'organismo_id'=>'3',//GNB-DESUR
            'municipio_id'=>'5',//carirubana
            'sectores'=>'ZARABÓN, MARAVEN, LOS MARISTAS.']
            );
        Cuadrante::create(
        ['cuadrante' => 'P-14',
            'telefono'=>'0416-610-44-61',
            'organismo_id'=>'3',//GNB-132
            'municipio_id'=>'5',//carirubana
            'sectores'=>'LAS MERCEDES, PEDRO MANUEL ARCAYA, TERMINAL DE PASAJEROS.']
            );
        Cuadrante::create(
        ['cuadrante' => 'P-15',
            'telefono'=>'0416-610-44-52',
            'organismo_id'=>'3',//DSUR-132
            'municipio_id'=>'5',//carirubana
            'sectores'=>'BICENTENARIO, PUNTA CARDÓN, LOS ROSALES.']
            );
        Cuadrante::create(
        ['cuadrante' => 'P-16',
            'telefono'=>'0416-610-41-51',
            'organismo_id'=>'1',//polifalcon
            'municipio_id'=>'5',//carirubana
            'sectores'=>'PUERTA MARAVEN,  23 DE ENERO, URB ESPAÑA']
            );

        Cuadrante::create(
        ['cuadrante' => 'P-1',
            'telefono'=>'0416-610-40-52',
            'organismo_id'=>'1',//polifalcon
            'municipio_id'=>'6',//colina
            'sectores'=>'SABANA LARGA, LAS MALVINAS']
            );
        Cuadrante::create(
        ['cuadrante' => 'P-2',
            'telefono'=>'0416-610-40-53',
            'organismo_id'=>'3',//GNB-131
            'municipio_id'=>'6',//colina
            'sectores'=>'LA VELA DE CORO (NORTE )']
            );
        Cuadrante::create(
        ['cuadrante' => 'P-3',
            'telefono'=>'0416-610-40-64',
            'organismo_id'=>'1',//polifalcon
            'municipio_id'=>'6',//colina
            'sectores'=>'LA VELA DE CORO (SUR)']
            );

        Cuadrante::create(
        ['cuadrante' => 'P-1',
            'telefono'=>'0416-610-40-57',
            'organismo_id'=>'4',//PNB
            'municipio_id'=>'13',//silva
            'sectores'=>'SECTOR 4, PUNTE FLECHADO, NUE,VA TUCACAS, TUQUE UNO, VENETUR, CASCO CENTRAL']
            );
        Cuadrante::create(
        ['cuadrante' => 'P-2',
            'telefono'=>'0416-610-42-46',
            'organismo_id'=>'4',//PNB
            'municipio_id'=>'13',//silva
            'sectores'=>'BARRIO SANTA ROSA, BARRIO ISAAC, COMPLEJO TURISTICO, AV LIBERTADOR, AV SILVA.']
            );
        Cuadrante::create(
        ['cuadrante' => 'P-3',
            'telefono'=>'0416-610-44-57',
            'organismo_id'=>'1',//polifalcon
            'municipio_id'=>'13',//silva
            'sectores'=>'SAID 1, SAID 2, LOS CORALES']
            );
        Cuadrante::create(
        ['cuadrante' => 'P-4',
            'telefono'=>'0416-610-40-62',
            'organismo_id'=>'1',//polifalcon
            'municipio_id'=>'13',//silva
            'sectores'=>'CARACARAS, LAS DELICIAS, ALCABALA, BOCA DE AROA, BARRIO CARTÓN']
            );

        Cuadrante::create(
        ['cuadrante' => 'P-1',
            'telefono'=>'0416-610-40-11',
            'organismo_id'=>'1',//polifalcon
            'municipio_id'=>'9',//federacion
            'sectores'=>'CASCO CENTRAL',
            'localidad'=>'CASCO CENTRAL']
            );
        Cuadrante::create(
        ['cuadrante' => 'P-2',
            'telefono'=>'0416-610-40-05',
            'organismo_id'=>'1',//polifalcon
            'municipio_id'=>'9',//federacion
            'sectores'=>'MAPARA-PAJUI',
            'localidad'=>'MAPARA-PAJUI']
            );
        Cuadrante::create(
        ['cuadrante' => 'P-3',
            'telefono'=>'0416-610-40-08',
            'organismo_id'=>'3',//gnb
            'municipio_id'=>'9',//federacion
            'sectores'=>'ROBLE-MAPARARI',
            'localidad'=>'ROBLE-MAPARARI']
            );

        Cuadrante::create(
        ['cuadrante' => 'P-1',
            'telefono'=>'0416-610-39-95',
            'organismo_id'=>'1',//polifalcon
            'municipio_id'=>'19',//union
            'sectores'=>'SAN CRUZ BUCARAL',
            'localidad'=>'SAN CRUZ BUCARAL']
            );

        Cuadrante::create(
        ['cuadrante' => 'P-1',
            'telefono'=>'0416-610-40-06',
            'organismo_id'=>'1',//polifalcon
            'municipio_id'=>'12',//peti
            'localidad'=>'CURIMAGUA']
            );
        Cuadrante::create(
        ['cuadrante' => 'P-2',
            'telefono'=>'0416-610-40-02',
            'organismo_id'=>'1',//polifalcon
            'municipio_id'=>'12',//peti
            'localidad'=>'CABURE']
            );

        Cuadrante::create(
        ['cuadrante' => 'P-1',
            'telefono'=>'0416-610-39-98',
            'organismo_id'=>'1',//polifalcon
            'municipio_id'=>'2',//bolivar
            'localidad'=>'SAN LUIS']
            );

        Cuadrante::create(
        ['cuadrante' => 'P-1',
            'telefono'=>'0416-610-39-97',
            'organismo_id'=>'1',//polifalcon
            'municipio_id'=>'24',//sucre
            'localidad'=>'CRUZ DE TARATARA']
            );

        Cuadrante::create(
        ['cuadrante' => 'P-1',
            'telefono'=>'0416-610-41-07',
            'organismo_id'=>'3',//gnb
            'municipio_id'=>'15',//dabajuro
            'localidad'=>'SECTOR TIJANA']
            );
        Cuadrante::create(
        ['cuadrante' => 'P-2',
            'telefono'=>'0416-610-40-68',
            'organismo_id'=>'1',//polifalcon
            'municipio_id'=>'15',//dabajuro
            'localidad'=>'SECTOR NUEVA']
            );
        Cuadrante::create(
        ['cuadrante' => 'P-3',
            'telefono'=>'0416-610-40-60',
            'organismo_id'=>'1',//polifalcon
            'municipio_id'=>'15',//dabajuro
            'localidad'=>'SECTOR LOS ANDES']
            );

        Cuadrante::create(
        ['cuadrante' => 'P-1',
            'telefono'=>'0416-610-41-16',
            'organismo_id'=>'1',//polifalcon
            'municipio_id'=>'10',//mauroa
            'localidad'=>'NORTE- ENTRADA']
            );
        Cuadrante::create(
        ['cuadrante' => 'P-2',
            'telefono'=>'0416-610-40-72',
            'organismo_id'=>'3',//gnb
            'municipio_id'=>'10',//mauroa
            'localidad'=>'SUR CASCO CENTRAL']
            );

        Cuadrante::create(
        ['cuadrante' => 'P-1',
            'telefono'=>'0416-610-41-14',
            'organismo_id'=>'3',//gnb
            'municipio_id'=>'25',//urumaco
            'localidad'=>'URUMACO']
            );
        Cuadrante::create(
        ['cuadrante' => 'P-1',
            'telefono'=>'0416-610-41-11',
            'organismo_id'=>'1',//polifalcon
            'municipio_id'=>'7',//democracia
            'localidad'=>'PEDREGAL']
            );
        Cuadrante::create(
        ['cuadrante' => 'P-1',
            'telefono'=>'0416-610-41-08',
            'organismo_id'=>'1',//polifalcon
            'municipio_id'=>'3',//buchivacoa
            'sectores'=>'BARIRO.GUAJIRO',
            'localidad'=>'BARIRO.GUAJIRO']
            );
        Cuadrante::create(
        ['cuadrante' => 'P-2',
            'telefono'=>'0416-610-41-08',
            'organismo_id'=>'1',//polifalcon
            'municipio_id'=>'3',//buchivacoa
            'sectores'=>'CAPATARIDA',
            'localidad'=>'CAPATARIDA']
            );

        Cuadrante::create(
        ['cuadrante' => 'P-1',
            'telefono'=>'0416-610-41-09',
            'organismo_id'=>'1',//polifalcon
            'municipio_id'=>'14',//zamora
            'sectores'=>'CENTRO-CAÑADA',
            'localidad'=>'CENTRO-CAÑADA']
            );
        Cuadrante::create(
        ['cuadrante' => 'P-2',
            'telefono'=>'0416-610-41-05',
            'organismo_id'=>'3',//GNB (D-132)
            'municipio_id'=>'14',//zamora
            'sectores'=>'INAVI',
            'localidad'=>'INAVI']
            );

        Cuadrante::create(
        ['cuadrante' => 'P-1',
            'telefono'=>'0416-610-41-01',
            'organismo_id'=>'1',//polifalcon
            'municipio_id'=>'22',//tocopero
            'sectores'=>'TOCOPERO',
            'localidad'=>'TOCOPERO']
            );

        Cuadrante::create(
        ['cuadrante' => 'P-1',
            'telefono'=>'0416-610-41-02',
            'organismo_id'=>'1',//polifalcon
            'municipio_id'=>'18',//PIRITU
            'sectores'=>'PIRITU',
            'localidad'=>'PIRITU']
            );
        Cuadrante::create(
        ['cuadrante' => 'P-2',
            'telefono'=>'0416-610-42-37',
            'organismo_id'=>'1',//polifalcon
            'municipio_id'=>'18',//PIRITU
            'sectores'=>'GUAMACHO',
            'localidad'=>'GUAMACHO']
            );

        Cuadrante::create(
        ['cuadrante' => 'P-1',
            'telefono'=>'0416-610-44-65',
            'organismo_id'=>'1',//polifalcon
            'municipio_id'=>'9',//falcon
            'sectores'=>'CASCO CENTRAL',
            'localidad'=>'CASCO CENTRAL']
            );
        Cuadrante::create(
        ['cuadrante' => 'P-2',
            'telefono'=>'0416-610-35-95',
            'organismo_id'=>'3',//gnb
            'municipio_id'=>'8',//falcon
            'sectores'=>'ADICORA',
            'localidad'=>'ADICORA']
            );
        Cuadrante::create(
        ['cuadrante' => 'P-3',
            'telefono'=>'0416-610-40-04',
            'organismo_id'=>'1',//polifalcon
            'municipio_id'=>'8',//falcon
            'sectores'=>'BUENA VISTA',
            'localidad'=>'BUENA VISTA']
            );



        Cuadrante::create(
        ['cuadrante' => 'P-1',
            'telefono'=>'0416-610-40-66',
            'organismo_id'=>'1',//polifalcon
            'municipio_id'=>'17',//los taques
            'sectores'=>'CREOLANDIA',
            'localidad'=>'CREOLANDIA']
            );
        Cuadrante::create(
        ['cuadrante' => 'P-2',
            'telefono'=>'0416-610-36-00',
            'organismo_id'=>'3',//gnb
            'municipio_id'=>'17',//los taques
            'sectores'=>'JUDIBANA',
            'localidad'=>'JUDIBANA']
            );
        Cuadrante::create(
        ['cuadrante' => 'P-3',
            'telefono'=>'0416-610-42-52',
            'organismo_id'=>'1',//polifalcon
            'municipio_id'=>'17',//los taques
            'sectores'=>'GUANADITO',
            'localidad'=>'GUANADITO']
            );
        Cuadrante::create(
        ['cuadrante' => 'P-4',
            'telefono'=>'0416-610-40-74',
            'organismo_id'=>'1',//polifalcon
            'municipio_id'=>'17',//los taques
            'sectores'=>'OASIS',
            'localidad'=>'OASIS']
            );
        Cuadrante::create(
        ['cuadrante' => 'P-5',
            'telefono'=>'0416-610-42-44',
            'organismo_id'=>'3',//gnb
            'municipio_id'=>'17',//los taques
            'sectores'=>'JAYANA-AMUAY',
            'localidad'=>'JAYANA-AMUAY']
            );
        Cuadrante::create(
        ['cuadrante' => 'P-6',
            'telefono'=>'0416-610-35-93',
            'organismo_id'=>'3',//gnb
            'municipio_id'=>'17',//los taques
            'sectores'=>'V. MARINA-TAQUES',
            'localidad'=>'V. MARINA-TAQUES']
            );

        Cuadrante::create(
        ['cuadrante' => 'P-1',
            'telefono'=>'0416-610-35-97',
            'organismo_id'=>'3',//gnb
            'municipio_id'=>'1',//acosta
            'sectores'=>'SAN JUAN CAYOS',
            'localidad'=>'SAN JUAN CAYOS']
            );

        Cuadrante::create(
        ['cuadrante' => 'P-1',
            'telefono'=>'0416-610-35-89',
            'organismo_id'=>'1',//polifalcon
            'municipio_id'=>'16',//MONS. ITURRIZA
            'sectores'=>'CHICHIRIVICHI  P-1',
            'localidad'=>'CHICHIRIVICHI  P-1']
            );
        Cuadrante::create(
        ['cuadrante' => 'P-2',
            'telefono'=>'0416-610-42-36',
            'organismo_id'=>'5',//pnb
            'municipio_id'=>'16',//MONS. ITURRIZA
            'sectores'=>'CHICHIRIVICHI P-2',
            'localidad'=>'CHICHIRIVICHI P-2']
            );
        Cuadrante::create(
        ['cuadrante' => 'P-3',
            'telefono'=>'0416-610-42-34',
            'organismo_id'=>'5',//pnb
            'municipio_id'=>'16',//MONS. ITURRIZA
            'sectores'=>'BOCA TOCUYO',
            'localidad'=>'BOCA TOCUYO']
            );
        Cuadrante::create(
        ['cuadrante' => 'P-4',
            'telefono'=>'0416-610-36-01',
            'organismo_id'=>'5',//pnb
            'municipio_id'=>'16',//MONS. ITURRIZA
            'sectores'=>'TOCUYO DE COSTA',
            'localidad'=>'TOCUYO DE COSTA']
            );

        Cuadrante::create(
        ['cuadrante' => 'P-1',
            'telefono'=>'0416-610-36-02',
            'organismo_id'=>'1',//polifalcon
            'municipio_id'=>'21',//jacura
            'sectores'=>'JACURA',
            'localidad'=>'JACURA']
            );

        Cuadrante::create(
        ['cuadrante' => 'P-1',
            'telefono'=>'0416-610-36-08',
            'organismo_id'=>'1',//polifalcon
            'municipio_id'=>'20',//SAN FRANCISCO
            'sectores'=>'MIRIMIRE',
            'localidad'=>'MIRIMIRE']
            );

        Cuadrante::create(
        ['cuadrante' => 'P-1',
            'telefono'=>'0416-610-41-50',
            'organismo_id'=>'3',//gnb
            'municipio_id'=>'22',//casique manaure
            'sectores'=>'YARACAL',
            'localidad'=>'YARACAL']
            );
        Cuadrante::create(
        ['cuadrante' => 'P-1',
            'telefono'=>'0416-610-36-07',
            'organismo_id'=>'1',//polifalcon
            'municipio_id'=>'23',//parmasola
            'sectores'=>'K-14',
            'localidad'=>'K-14']
            );
    }

}
