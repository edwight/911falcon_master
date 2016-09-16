<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::resource('/', 'Admin\DashboardsController');

Route::group(
    array('prefix' => 'admin', 'middleware' => ['auth','admin']), 
    function() { 
        Route::resource('recepcion', 'Operadores\RecepcionController');
        Route::get('api/listusers', 'Admin\UsersController@getList');
        Route::resource('despacho', 'Despachadores\DespachadoresController');
         
        Route::post('supervisores/despacho/busqueda','Supervisores\SupervisoresController@busquedaDespacho');
        Route::get('supervisores/despacho/busqueda','Supervisores\SupervisoresController@busquedaDespacho');

        Route::resource('/', 'Admin\DashboardsController');
        Route::resource('grupos', 'Admin\GruposController');
        Route::resource('users', 'Admin\UsersController');
        Route::resource('organismos', 'Admin\OrganismosController');
        Route::resource('motivos', 'Admin\MotivosController');
        Route::resource('supervisores/despacho','Supervisores\SupervisoresController');
        //Route::resource('contactos', 'Admin\ContactosController');
        //Route::resource('contacto', 'Operadores\ContactoController');//admin
		Route::get('reporte/organismos/total','Estadisticas\EstadisticasController@organismosReporteTotal');
		Route::get('reporte/organismos/hoy','Estadisticas\EstadisticasController@organismosReporteHoy');
		Route::get('reporte/motivos/total','Estadisticas\EstadisticasController@MotivosReporteTotal');
		Route::get('reporte/motivos/hoy','Estadisticas\EstadisticasController@MotivosReporteHoy');
		Route::get('reporte/estados/total','Estadisticas\EstadisticasController@EstadosReporteTotal');
		Route::get('reporte/estados/hoy','Estadisticas\EstadisticasController@EstadosReportehoy');
		Route::get('reporte/municipios/total','Estadisticas\EstadisticasController@MunicipiosReporteTotal');
		Route::get('reporte/municipios/hoy','Estadisticas\EstadisticasController@MunicipiosReportehoy');

		Route::get('reporte/llamadas/total','Estadisticas\EstadisticasController@LlamadasReporteTotal');
        Route::get('reporte/llamadas/hoy','Estadisticas\EstadisticasController@LlamadasReporteHoy');
		Route::get('reporte/casos/total','Estadisticas\EstadisticasController@CasosReporteTotal');
        Route::get('reporte/casos/hoy','Estadisticas\EstadisticasController@CasosReporteHoy');
        Route::get('reporte/casos/municipiomotivo/{id}','Estadisticas\EstadisticasController@reporteMunicipiosMotivos');
    }
);

Route::group(
    array('prefix' => 'admin', 'middleware' => ['auth','supervisor']), 
    function() { 

        Route::resource('/', 'Admin\DashboardsController');
   
        Route::resource('supervisores/despacho','Supervisores\SupervisoresController');
        //Route::post('supervisores/despacho','Supervisores\SupervisoresController@postBusquedaDespacho');
        //Route::get('supervisores/despacho','Supervisores\SupervisoresController@postBusquedaDespacho');
        //Route::resource('contactos', 'Admin\ContactosController');
        //Route::resource('contacto', 'Operadores\ContactoController');//admin
        Route::get('reporte/organismos/total','Estadisticas\EstadisticasController@organismosReporteTotal');
        Route::post('reporte/organismos/busqueda}','Estadisticas\EstadisticasController@organismosReporteBusqueda');

        Route::get('reporte/organismos/hoy','Estadisticas\EstadisticasController@organismosReporteHoy');
        Route::get('reporte/motivos/total','Estadisticas\EstadisticasController@MotivosReporteTotal');
        Route::get('reporte/motivos/hoy','Estadisticas\EstadisticasController@MotivosReporteHoy');
        Route::get('reporte/estados/total','Estadisticas\EstadisticasController@EstadosReporteTotal');
        Route::get('reporte/estados/hoy','Estadisticas\EstadisticasController@EstadosReportehoy');
        Route::get('reporte/municipios/total','Estadisticas\EstadisticasController@MunicipiosReporteTotal');
        Route::get('reporte/municipios/hoy','Estadisticas\EstadisticasController@MunicipiosReportehoy');

        Route::get('reporte/cuadrante_motivos','Estadisticas\EstadisticasController@reporteCuadranteMotivos');
        Route::get('reporte/cuadrante_llamadas','Estadisticas\EstadisticasController@reporteCuadranteContactos');
        //Route::get('reporte/cuadrante/{id}','Estadisticas\EstadisticasController@cuadranteDetail');

        Route::get('reporte/llamadas/total','Estadisticas\EstadisticasController@LlamadasReporteTotal');
        Route::get('reporte/casos/total','Estadisticas\EstadisticasController@OrganismosEstadosReporteTotal');
        Route::get('supervisores/api/users', 'Despachadores\DespachadoresController@getUsers');
    }
);

Route::group(
    array('prefix' => 'admin', 'middleware' => ['auth','despachador']), 
    function() { 
        Route::resource('/', 'Admin\DashboardsController');
        Route::resource('despacho', 'Despachadores\DespachadoresController');

    }
);

Route::group(
    array('prefix' => 'admin', 'middleware' => ['auth','operador']), 
    function() { 
        Route::resource('/', 'Admin\DashboardsController');
        Route::resource('recepcion', 'Operadores\RecepcionController');

    }
);


Route::get('api/dropdown/municipio','Operadores\RecepcionController@getMunicipio');
Route::get('api/dropdown/parroquia','Operadores\RecepcionController@parroquia');
Route::get('api/dropdown/cuadrante','Despachadores\DespachadoresController@getCuadrante');
Route::get('api/dropdown/cuadrante/find','Despachadores\DespachadoresController@getCuadranteFind');
Route::get('api/dropdown/localidad','Operadores\RecepcionController@getLocalidad');


Route::get('admin/api/users', 'Despachadores\DespachadoresController@getUsers');
//Route::get('admin/recepcion/api/municipio/json','Operadores\RecepcionController@municipio');



Route::get('listado_graficas', 'GraficasController@index');
Route::get('api/grafica_registros/{anio}/{mes}', 'GraficasController@registros_mes');
Route::get('grafica_publicaciones', 'GraficasController@total_publicaciones');

Route::auth();




 Route::get('admin/reporte/cuadrante/{id}','Estadisticas\EstadisticasController@cuadranteMotivos');
