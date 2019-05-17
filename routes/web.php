<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/getDistritos/{idDepartmento}', 'CompanyController@getEmployees');


// Save File in AWS
Route::post('guardarAvatarCompany', 'CompanyController@guardarImagenPerfil')->name('avatar.upload.post.company');
Route::post('guardarAvatarCandidate', 'CandidateController@guardarImagenPerfil')->name('avatar.upload.post.candidate');


// Middleware Auth
Route::group(['middleware' => ['auth']], function() {
    // Redirect to profile  user by Role
    Route::get('/perfil', 'Controller@mostrarPerfil')->name('perfil');

    Route::delete('/eliminarIDEstudio/{id}', 'StudyController@eliminarIDEstudio');
    Route::post('/registrarEstudios', 'StudyController@registrarEstudios')->name('registrar.estudios');
    Route::get('/verInformacionCandidato', 'StudyController@getEstudios')->name('ver.informacion.candidato');
//    Route::get('/verInformacionCandidato', function () {
//        return view('layouts.candidatos.informacion');
//    });

});


Route::group(['prefix' => 'actualizar_perfil'], function () {
    Route::group(['middleware' => ['auth']], function() {
        Route::put('/empresa', 'CompanyController@actualizarPerfil')->name('actualizar_perfil_empresa');
        Route::put('/candidato', 'CandidateController@actualizarPerfil')->name('actualizar_perfil_candidato');
        Route::put('/contacto', 'CandidateController@actualizarContacto')->name('actualizar_perfil_contacto');
    });
});











