<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\EstiloController;
use App\Http\Controllers\TarifaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SolicitudController;
use App\Http\Controllers\PrecioController;
use App\Http\Controllers\CaracteristicaController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\ProvinciaController;
use App\Http\Controllers\DistritoController;
use App\Http\Controllers\UbigeoController;
use Illuminate\Support\Facades\Artisan;


Route::get('/', [WebController::class, 'index'])->name('index');
Route::get('/nosotros', [WebController::class, 'nosotros'])->name('nosotros');
Route::get('/contacto', [WebController::class, 'contacto'])->name('contacto');
Route::get('/planes', [WebController::class, 'planes'])->name('planes');
Route::get('/servicio/fibraoptica', [WebController::class, 'fibraoptica'])->name('fibraoptica');
Route::get('/pagos', [WebController::class, 'pagos'])->name('pagos');
Route::get('/error', [WebController::class, 'error'])->name('error');
Route::post('/contacto/solicitud',[SolicitudController::class, 'store']);
Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [AdminController::class, 'index'])->name('home');
    Route::get('/empresas', [EmpresaController::class, 'index'])->name('empresas');

    Route::group(['middleware' => 'admin'], function () {
        /* USUARIOS */
        Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios');
        Route::get('/usuario/create', [UsuarioController::class, 'create']);
        Route::post('/usuario/guardar', [UsuarioController::class, 'store']);
        Route::get('/usuario/editar/{id}', [UsuarioController::class, 'edit']);
        Route::post('/usuario/actualizar/{id}', [UsuarioController::class, 'update']);
        Route::get('/usuario/borrar/{id}', [UsuarioController::class, 'delete']);

    });
    Route::get('/perfil', [UsuarioController::class, 'perfil']);

    /* EMPRESA */
    Route::post('/empresa/guardar', [EmpresaController::class, 'store']);
    Route::get('/empresa/editar/{id}', [EmpresaController::class, 'edit']);
    Route::post('/empresa/actualizar/{id}', [EmpresaController::class, 'update']);
    Route::get('/empresa/borrar/{id}', [EmpresaController::class, 'delete']);

    /* PLANES */
    Route::get('/tarifas', [TarifaController::class, 'index'])->name('tarifas');
    Route::get('/tarifas/create', [TarifaController::class, 'create']);
    Route::post('/tarifa/guardar', [TarifaController::class, 'store']);
    Route::get('/tarifa/editar/{id}', [TarifaController::class, 'edit']);
    Route::post('/tarifa/actualizar/{id}', [TarifaController::class, 'update']);
    Route::get('/tarifa/borrar/{id}', [TarifaController::class, 'delete']);

    /* SOLICITUD */
    Route::get('/solicitudes', [SolicitudController::class, 'index'])->name('solicitudes');
    Route::get('/solicitudes/export', [SolicitudController::class, 'exportExcel'])->name('solicitudes.export');
    Route::get('/solicitudes/alert/{id}', [SolicitudController::class, 'alert'])->name('solicitudes.alert');
    Route::get('/solicitudes/ver/{id}', [SolicitudController::class, 'ver'])->name('solicitud.ver');

    /* WEBPAGE */
    /* CABECERA */
    Route::controller(EstiloController::class)->group(function (){
        Route::get('/estilo/cabecera', 'cabecera_index')->name('cabecera');
        Route::get('/estilo/cabecera/editar/{id}', 'cabecera_edit')->name('cabecera.edit');
        Route::post('/estilo/cabecera/update/{id}', 'cabecera_update')->name('cabecera.update');
    });
    /* LOGO */
    Route::controller(EstiloController::class)->group(function (){
        Route::get('/estilo/logo', 'logo_index')->name('logo');
        Route::get('/estilo/logo/editar/{id}', 'logo_edit')->name('logo.edit');
        Route::post('/estilo/logo/update/{id}', 'logo_update')->name('logo.update');
    });
    /* REDES SOCIALES */
    Route::controller(EstiloController::class)->group(function (){
        Route::get('/redes', 'redes_index')->name('redes');
        Route::get('/redes/editar', 'redes_edit')->name('redes.edit');
        Route::post('/redes/update', 'redes_update')->name('redes.update');
    });
    /* PRECIOS PRINCIPALES */
    Route::controller(PrecioController::class)->group(function (){
        Route::get('/precios', 'precios_index')->name('precios');
        Route::get('/precios/editar', 'precios_edit')->name('precios.edit');
        Route::post('/precios/update', 'precios_update')->name('precios.update');
    });
    /* CARACTERISTICAS */
    Route::controller(CaracteristicaController::class)->group(function (){
        Route::get('/caracteristicas', 'caracteristicas_index')->name('caracteristicas');
        Route::get('/caracteristicas/editar/{id}', 'caracteristicas_edit')->name('caracteristicas.edit');
        Route::post('/caracteristicas/update/{id}', 'caracteristicas_update')->name('caracteristicas.update');
    });
    /* SLIDERS */
    Route::controller(EstiloController::class)->group(function (){
        Route::get('/sliders', 'sliders_index')->name('sliders');
        Route::get('/sliders/editar/{id}', 'sliders_edit')->name('sliders.edit');
        Route::post('/sliders/update/{id}', 'sliders_update')->name('sliders.update');
    });
    /* DEPARTAMENTOS */
    Route::controller(DepartamentoController::class)->group(function (){
        Route::get('/departamentos', 'index')->name('departamentos');
        Route::post('/departamentos/guardar', 'store');
        Route::get('/departamentos/editar/{id}', 'edit');
        Route::post('/departamentos/update/{id}', 'update')->name('departamentos.update');
        Route::get('/departamentos/borrar/{id}', 'delete');
    });
    /* PROVINCIAS */
    Route::controller(ProvinciaController::class)->group(function (){
        Route::get('/provincias', 'index')->name('provincias');
        Route::post('/provincias/guardar', 'store');
        Route::get('/provincias/editar/{id}', 'edit');
        Route::post('/provincias/update/{id}', 'update')->name('provincias.update');
        Route::get('/provincias/borrar/{id}', 'delete');
    });
    /* DISTRITOS */
    Route::controller(DistritoController::class)->group(function (){
        Route::get('/distritos', 'index')->name('distritos');
        Route::post('/distritos/guardar', 'store');
        Route::get('/distritos/editar/{id}', 'edit');
        Route::post('/distritos/update/{id}', 'update')->name('distritos.update');
        Route::get('/distritos/borrar/{id}', 'delete');
    });
    /* UBIGEOS */
    Route::controller(UbigeoController::class)->group(function (){
        Route::get('/ubigeos', 'index')->name('ubigeos');
        Route::post('/ubigeos/guardar', 'store');
        Route::get('/ubigeos/editar/{id}', 'edit');
        Route::post('/ubigeos/update/{id}', 'update')->name('ubigeos.update');
        Route::get('/ubigeos/borrar/{id}', 'delete');
    });

});
Route::controller(ApiController::class)->group(function (){
    Route::get('/provincias/{departament}', 'provincia');
    Route::get('/distritos/{provincia}', 'distrito');
});

Route::get('/linkear',function(){
    Artisan::call('storage:link');
});

Route::fallback(function() {
    return redirect('/error');
});

Route::get('/cache',function(){
    Artisan::call('config:cache');
});
