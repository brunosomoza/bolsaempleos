<?php

namespace App\Http\Controllers;

use App\Candidate;
use App\Company;
use App\Country;
use App\Locale;
use App\Region;
use App\User;
use Auth;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\Types\Integer;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function mostrarPerfil(){

        if( Auth::user()->role_id == 1){
            $id = Auth::user()->id;
            $candidato = Candidate::find($id);
            //$candidato = Candidate::with('profession')->where('user_id',$id)->get(); -- Trae las dos tablas candidate y profession x el id
            $url = Storage::temporaryUrl($candidato->picture, now()->addMinutes(5));
            return view('layouts.candidatos.perfil',compact('candidato','url'));

        } elseif (Auth::user()->role_id == 2 ) {

            $id = Auth::user()->id;
            $empresa = Company::find($id);
            $url = Storage::temporaryUrl($empresa->logo, now()->addMinutes(5));

            return view('layouts.empleador.perfil',compact('empresa','url'));
        }else{
            return view('welcome');
        }
    }

    public function mostrarRelacion(){
        $id = Auth::user()->id;
        $candidato = Candidate::with('profession','country','studies')->withCount('studies')->where('user_id',$id)->get();// Extrae todos los registros de la relacion que esten relacionadas con el user_id… genera un json
        dd($candidato);
    }

// Se borro no sabia donde se usa...
//    function fetch(Request $request)
//    {
//        $select = $request->get('select');
//        $value = $request->get('value');
//        $dependent = $request->get('dependent');
//        $data = DB::table('Regions')
//            ->where('country_id', 1)
//            ->get();
//        $output = '<option value="">Select '.ucfirst($dependent).'</option>';
//        foreach($data as $row)
//        {
//            $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
//        }
//        echo $output;
//    }


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
