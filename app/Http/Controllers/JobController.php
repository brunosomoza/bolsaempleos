<?php

namespace App\Http\Controllers;

use App\Candidate;
use Auth;
use App\Job;
use Illuminate\Http\Request;
use Faker\Provider\Uuid;
use DB;

class JobController extends Controller
{
    public function verListaJobs(){
        $rolUsuario = Auth::user()->role_id;
        if( $rolUsuario == 1){
            $trabajos =  Job::paginate(15);
            return view('layouts.candidatos.busqueda_empleos', compact('trabajos'));
        }
        else{
            return redirect('/');
        }
    }

    public function showJob($codigo){
//        $candidato = Candidate::find($id);
//        //$candidato = Candidate::with('profession')->where('user_id',$id)->get(); -- Trae las dos tablas candidate y profession x el id
//        $url = Storage::temporaryUrl($candidato->picture, now()->addMinutes(5));
//        return view('layouts.candidatos.perfil',compact('candidato','url'));

        $trabajo = DB::table('jobs')->where('code', $codigo)->first();
        return view('layouts.trabajos.detalle', compact('trabajo'));
    }

    public function verListaEmpleoLugar(Request $request){
        return view('layouts.candidatos.busqueda_empleos_parametros');
    }

    public function addJob(){
        $rolUsuario = Auth::user()->role_id;
        if( $rolUsuario == 2){
            return view('layouts.empleador.crear_trabajo');
        }
        else{
            return redirect('/');
        }
    }

    public function registrarJob(Request $request){
        $trabajo = new Job;
        $trabajo->name = $request->get('name');
        $trabajo->company_id = 1;
        $trabajo->code = Uuid::uuid();
        $string= $request->get('description');
        $trabajo->description = str_replace(array("\r\n", "\n\r", "\r", "\n"), "<br />", $string);
        $trabajo->fecha_contratacion = $request->get('fecha_contratacion');
        $trabajo->type = $request->get('tipo_trabajo');
        $trabajo->salary = $request->get('salary');
        $trabajo->experiencia = $request->get('experiencia');
        $trabajo->save();
        return view('layouts.empleador.crear_trabajo');
    }
}
