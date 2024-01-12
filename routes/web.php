<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', function () {
    return "login usuario";
});

Route::get('catalog', function () {
    return "Listado de peliculas";
});

Route::get('catalog/show/{id?}', function ($id=0) {
    return "Vista a detalle película " . $id;
});

Route::get('catalog/create', function () {
    return "Añadir película ";
});

Route::get('catalog/edit/{id?}', function ($id=0) {
    return "Mostar película " . $id;
});

Route::get('tabla', function () {
    for ($i=0; $i <= 10 ; $i++) { 
        echo $i . " * " . "6 = " . ($i * 6) ;
        echo "<br>";
    }
});

Route::get('tabla/{id?}', function ($id=2) {
    for ($i=0; $i <= 10 ; $i++) { 
        echo $i . " * " . $id . " = " . ($i * $id) ;
        echo "<br>";
    }
})->where('id', "[0-9]+");

Route::get('/hola', function () {
    $nombre = 'jorge';
    return view('hola')->with('nombre',$nombre);
});

Route::get('/adios', function () {
    $nombre = 'jorge';
    return view('adios',['nombre' => $nombre]);
});

Route::get('/inicio/{nombre?}', function ($nombre='manolo') {

    return view('inicio',compact('nombre'));
})->name('inicio');


Route::get('listado', function() {
    $libros = array(
    array("titulo" => "El juego de Ender",
    "autor" => "Orson Scott Card"),
    array("titulo" => "La tabla de Flandes",
    "autor" => "Arturo Pérez Reverte"),
    array("titulo" => "La historia interminable",
    "autor" => "Michael Ende"),
    array("titulo" => "El Señor de los Anillos",
    "autor" => "J.R.R. Tolkien")
    );
    return view('listado', compact('libros'));
    })->name('listado_libros');