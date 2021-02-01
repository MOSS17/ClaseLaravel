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

/*
Route::get('/', function () {
    return [
        'Clases' => [
            'Instalacion de Laravel',
            'Routes de Laravel',
            'Views de Laravel',
        ]
    ];
});
*/
/*
Route::get('clases', function () {
    return 'Aqui se van a visualizar las clases';
});

Route::get('notas/temas', function () {
    return 'Aqui se van a visualizar los temas';
});
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('notas', function () {
    return view('notas');
});

Route::get('agregar', function () {
    return view('agregar');
});