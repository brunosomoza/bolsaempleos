<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function mostrarPerfil(){

        if( Auth::user()->role_id == 2){
            return view('layouts.empleador.perfil');
        } elseif (Auth::user()->role_id == 1 ) {
            return view('layouts.candidatos.perfil');
        }else{
            return view('welcome');
        }
    }

}
