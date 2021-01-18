<?php

use Illuminate\Support\Facades\Route;

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
    return 'Home';
});

Route::get('/usuarios', function () {
        return 'Usuarios';
});

//usuarios/nuevo != usuarios/[0-9]+  EL WHERE ARA ENS DIFERENCIA ENTRE SI LI DONEM UN NUMERO O NO PERQUE SINO MAI ENS ENTRARA A LA NOVA FUNCIO
//TAMBE TINDRE EN COMPTE QUE SI EN LLOC DEL WHERE CAMBIEM L'ORDRE DE LES FUNCIONS TAMBE ENS FARIA EL MATEIX

Route::get('/usuarios/{id}', function($id) {
    return 'Mostrando detalle del usuario: '.$id;
    /*return "Mostrando detalle del usuario: {$id}"*/ /*fa el mateix que la linea anterior en sintaxis diferent*/
})->where('id', '[0-9]+'); //->here('id', '\d+'); ES EL MATEIX QUE LA LINEA ANTERIOR EL + SIGNIFICA QUE HI POT HABER MES D'UN NUMERO

Route::get('/usuarios/nuevo', function() {
    return 'Crear nuevo usuario';
});

Route::get('/saludo/{name}/{nickname?}', function($name, $nickname = null) { //AL POSAR EL ? DESPRES DEL CAMP EL FEM OPCIONAL
    
    $name = ucfirst($name);
    
    if($nickname){
        return "Bienvenido {$name}, tu apodo es {$nickname}";
    } else {
        return "Bienvenido {$name}";
    }
    
});
        
/*Route::get('/', function () {
    return view('welcome');
});*/
