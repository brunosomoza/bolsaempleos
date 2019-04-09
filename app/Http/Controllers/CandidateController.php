<?php

namespace App\Http\Controllers;

use App\Company;
use Auth;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public  function  actualizarPerfil( Request $request){
        $id = Auth::user()->id;
        $empresa = Company::find($id);
        $empresa->ruc = $request->get('ruc');
        $empresa->save();

        return redirect('/perfil');


    }
}
