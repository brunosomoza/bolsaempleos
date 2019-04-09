<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|*/

Route::get('/indonesia','CountryController@provinces');

Route::get('/json-regencies/{id}','CountryController@regencies');

Route::get('/json-districts', 'CountryController@districts');

Route::get('/json-village', 'CountryController@villages');



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/getEmployees/{id}', 'CompanyController@getEmployees');



Route::group(['prefix' => 'actualizar_perfil'], function () {
    Route::group(['middleware' => ['auth']], function() {
        Route::put('/empresa', 'CompanyController@actualizarPerfil')->name('actualizar_perfil_empresa');
        Route::put('/candidato', 'CandidateController@actualizarPerfil')->name('actualizar_perfil_candidato');
    });
});


// Middleware Auth
Route::group(['middleware' => ['auth']], function() {
    //Redirecciona al perfil del usuario por perfil
    Route::get('/perfil', 'Controller@mostrarPerfil')->name('perfil');

    // Actualizar Perfil Empresa
    Route::put('/perfil/empresa/actualizar', 'CompanyController@actualizarPerfil')->name('actualizar_perfil_empresa');
});




Route::get('/logout', function () {
    return view('auth.login');
});

Route::get('/lista_empleos', function () {
    return view('layouts.candidatos.lista_empleos');
});

Route::get('/lista_candidatos', function () {
    return view('layouts.empleador.lista_candidatos');
});

Route::get('/lista_empresas', function () {
    return view('layouts.empleador.lista_candidatos');
});

Route::get('/informacion_empresa', function () {
    return view('layouts.empleador.informacion_empresa');
});

Route::get('/administrar_trabajos', function () {
    return view('layouts.empleador.administrar_trabajos');
});

Route::get('/paquetes_empresa', function () {
    return view('layouts.empleador.paquetes_empresa');
});

Route::get('/crear_trabajo', function () {
    return view('layouts.empleador.crear_trabajo');
});



Route::get('/facturas_empresa', function () {
    return view('layouts.empleador.facturas_empresa');
});

Route::get('/alertas_empresa', function () {
    return view('layouts.empleador.alertas');
});

Route::get('/alertas_candidato', function () {
    return view('layouts.candidatos.alertas');
});

Route::get('/password_empresa', function () {
    return view('layouts.empleador.password');
});

Route::get('/informacion_candidato', function () {
    return view('layouts.candidatos.informacion');
});

Route::get('/mas_informacion_candidato', function () {
    return view('layouts.candidatos.mas_informacion');
});

Route::get('/cv', function () {
    return view('layouts.candidatos.cv');
});

Route::get('/busqueda_empleos', function () {
    return view('layouts.candidatos.busqueda_empleos');
});

Route::get('/dashboard_candidato', function () {
    return view('layouts.candidatos.dashboard');
});

Route::get('/password_candidato', function () {
    return view('layouts.candidatos.password');
});

Route::get('/postulaciones', function () {
    return view('layouts.candidatos.postulaciones');
});