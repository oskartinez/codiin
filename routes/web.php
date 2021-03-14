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

Route::get('/login', function () {
    return View::make('login.ingresar');
});

Route::get('/registrar', function () {
    return View::make('login.registrar');
});

// Presentaciones routes
Route::get('/presentacion', function () {
    return View::make('presentacion.alta');
});

Route::get('/ingresar', function () {
    var_dump( $results = DB::select('select * from UsuarioOfExt'));
});

// Registro Controller **********************************************************
Route::post('/registro_envio', [RegistroController::class, 'registrar'])->name('registro_envio');


Route::get('/test', function () {
    
        //$serverName = "(local)\sqlexpress";  
        
        /* Connect using Windows Authentication. */  
        try  
        {  
        $conn = new PDO( "sqlsrv:server=127.0.0.1;Database=CODIIN_prueba", "sa", "genius");  
        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );  
        }  
        catch(Exception $e)  
        {   
        die( print_r( $e->getMessage() ) );   
        }  
});

Route::get('/phpinfo', function () {
    
    phpinfo();
});