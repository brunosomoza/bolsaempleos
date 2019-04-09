<?php

namespace App\Http\Controllers;

use App\Country;
use App\Locale;
use App\Region;
use App\User;
use Auth;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use phpDocumentor\Reflection\Types\Integer;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function mostrarPerfil(){

        if( Auth::user()->role_id == 1){
            return view('layouts.candidatos.perfil');
        } elseif (Auth::user()->role_id == 2 ) {
            return view('layouts.empleador.perfil');
        }else{
            return view('welcome');
        }
    }


    function fetch(Request $request)
    {
        $select = $request->get('select');
        $value = $request->get('value');
        $dependent = $request->get('dependent');
        $data = DB::table('Regions')
            ->where('country_id', 1)
            ->get();
        $output = '<option value="">Select '.ucfirst($dependent).'</option>';
        foreach($data as $row)
        {
            $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
        }
        echo $output;
    }


    public function regencies(){
        $provinces_id = Input::get('province_id');
        $regencies = Regencies::where('province_id', '=', $provinces_id)->get();
        return response()->json($regencies);
    }

    public function districts(){
        $regencies_id = Input::get('regencies_id');
        $districts = Districts::where('regency_id', '=', $regencies_id)->get();
        return response()->json($districts);
    }

    public function villages(){
        $districts_id = Input::get('districts_id');
        $villages = Villages::where('district_id', '=', $districts_id)->get();
        return response()->json($villages);
    }

}
