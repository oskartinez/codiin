<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return View::make('login.ingresar');
});

Route::get('/login', function () {
    return View::make('login.ingresar');
});

Route::get('/registrar', function () {
    return View::make('login.registrar');
});

// Presentaciones routes
Route::get('/presentacion/alta', function () {
    return View::make('presentacion.alta');
});
Route::get('/presentacion/', function () {
    return View::make('presentacion.inicio');
});

Route::get('/presentacion/sinenviar', function () {
    return View::make('presentacion.sinenviar');
});

Route::get('/presentacion/enviadas', function () {
    return View::make('presentacion.enviadas');
});

// Oficinas routes
Route::get('/oficina/datos', function () {
    return View::make('oficina.datos');
});
Route::get('/oficina/accesos', function () {
    return View::make('oficina.accesos');
});
Route::get('/oficina/nuevo', function () {
    return View::make('oficina.nuevo');
});



Route::get('/ingresar', function () {
    var_dump( $results = DB::select('select * from UsuarioOfExt'));
});

// Registro Controller **********************************************************
Route::post('/registro_envio', [RegistroController::class, 'registrar'])->name('registro_envio');


Route::get('/test-sigi2', function () {
    
        //$serverName = "(local)\sqlexpress";  
        
        /* Connect using Windows Authentication. */  
        try  
        {  
        $conn = new PDO(env(CON1, ''), env(CON1US,''), env(CON1PW,''));  
        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );  
        echo "conexion exitosa";
        }  
        catch(Exception $e)  
        {   
        die( print_r( $e->getMessage() ) );   
        }  
});


Route::get('/test-sigi', function () {
    
    //$serverName = "(local)\sqlexpress";  
    
    /* Connect using Windows Authentication. */  
    try  
    {  
        $conn = new PDO(env(CON2,''), env(CON2US,''), env(CON2PW,''));  
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );  
    }  
    catch(Exception $e)  
    {   
    die( print_r( $e->getMessage() ) );   
    }  
});

// APIS
Route::get('/api/dependencias', 'DependenciasController@index');


// pruebas
Route::get('/phpinfo', function () {
    
    phpinfo();
});
Route::get('/autocomplete', function () {
    
    return View::make('prueba.autocomplete');
});