<?php

namespace App\Http\Controllers;

use App\Company;
use App\Study;
use Auth;
use Faker\Provider\Uuid;
use Illuminate\Http\Request;

class StudyController extends Controller
{
    public  function  registrarEstudios( Request $request){
        $id = Auth::user()->id;
        $estudios = new Study();
        $estudios->code = Uuid::uuid();
        $estudios->candidate_id = $id;
        $estudios->school_id = $id;
        $estudios->status = "TERMINADO";
        $estudios->level = "UNIVERSIDAD";
        $estudios->start = $request->get('inicioEstudio');
        $estudios->end = $request->get('finEstudio');
        $estudios->name = $request->get('nombreCarrera');
        $estudios->save();

        return redirect('/perfil');
    }

    public  function  eliminarIDEstudio($id){
        $estudios = Study::where('code','=', $id);
        $estudios->delete();

        return redirect('/perfil');
    }

    public function getEstudios()
    {
//        $nombre = Auth::user()->name;
//        $id = Auth::user()->id;
//        $asistencias = \App\Maker::where('user_id','=',$id)->get();
//        return view('asistencias', compact('asistencias','nombre')); // sin $

        $id = Auth::user()->id;
        $estudios = Study::where('candidate_id',$id)->get();
        return view('layouts.candidatos.informacion', compact('estudios'));
    }
}
