<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/cambiarPublicmeetingID', 'RoomController@cambiarPublicmeetingID')->name('cambiar.public.meetingID');
Route::get('/listarRoomUP', 'RoomController@listarRoomUP')->name('listar.room.UP');
Route::get('/eliminarGrabaciones', 'RoomController@listarGrabacionesAll')->name('eliminar.grabacion.api');
Route::get('/terminarRoom', 'RoomController@terminarRoom')->name('terminar.room.id');
Route::get('/eliminarGrabacionID/{id}', 'RoomController@eliminarGrabacionID')->name('eliminar.grabacion.id');

// votaba un return Route::get('/listarGrabacionesAll', 'RoomController@listarGrabacionesAll')->name('listar.grabaciones.all');
Route::get('/getDistritos/{idDepartmento}', 'CompanyController@getEmployees');

// Middleware Auth
Route::group(['middleware' => ['auth']], function() {

    Route::get('/addJob', 'JobController@addJob')->name('addJob');
    Route::post('/registrarJob', 'JobController@registrarJob')->name('registrar.job');
    Route::get('/addJob', 'JobController@addJob')->name('addJob');
    Route::get('/verListaJobs', 'JobController@verListaJobs')->name('ver.lista.jobs');
    Route::get('/showJob/{codigo}', 'JobController@showJob')->name('ver.detalle.trabajo');
    Route::post('/verListaJobs/{empleo}/{lugar}', 'JobController@verListaEmpleoLugar')->name('ver.lista.jobs');

    // Redirect to profile  user by Role
    Route::get('/perfil', 'Controller@mostrarPerfil')->name('perfil');

    // Borrar , demo view relaciones
    Route::get('/mostrarRelacion', 'Controller@mostrarRelacion')->name('perfilxxx');

    // Show, Register, delete study candidate
    Route::delete('/eliminarIDEstudio/{id}', 'StudyController@eliminarIDEstudio');
    Route::post('/registrarEstudios', 'StudyController@registrarEstudios')->name('registrar.estudios');

    Route::post('/registrarReunion', 'CompanyController@registrarReunion')->name('registrar.reunion');
    Route::get('/registrarReunion', 'CompanyController@vistaRegistrarReunion')->name('vista.registrar.reunion');
    Route::get('/unirseReunion', 'CompanyController@unirseReunion')->name('unirse.reunion');

    Route::get('/verInformacionCandidato', 'StudyController@getEstudios')->name('ver.informacion.candidato');


    Route::post('/unirseRoomEmpleado', 'CandidateController@unirseReunionPost')->name('candidato.unirse.reunion.post');
    Route::get('/unirseRoomEmpleado', 'CandidateController@unirseReunion')->name('candidato.unirse.reunion');

    // Save File in AWS
    Route::post('guardarAvatarCompany', 'CompanyController@guardarImagenPerfil')->name('avatar.upload.post.company');
    Route::post('guardarAvatarCandidate', 'CandidateController@guardarImagenPerfil')->name('avatar.upload.post.candidate');

});


Route::group(['prefix' => 'actualizar_perfil'], function () {
    Route::group(['middleware' => ['auth']], function() {
        Route::put('/empresa', 'CompanyController@actualizarPerfil')->name('actualizar_perfil_empresa');
        Route::put('/candidato', 'CandidateController@actualizarPerfil')->name('actualizar_perfil_candidato');
        Route::put('/contacto', 'CandidateController@actualizarContacto')->name('actualizar_perfil_contacto');
    });
});










