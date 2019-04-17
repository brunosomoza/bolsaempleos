<?php

namespace App\Http\Controllers;

use App\Company;
use App\Region;
use Auth;
use DB;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public  function  actualizarPerfil( Request $request){
        $id = Auth::user()->id;
        $empresa = Company::find($id);
        $empresa->ruc = $request->get('ruc');
        $empresa->namesocial = $request->get('namesocial');
        $empresa->address = $request->get('address');

        $empresa->code_districts = $request->get('code_districts');
        $empresa->description = $request->get('description');
        $empresa->industry_id = (int) $request->get('industria');
        $empresa->save();

        return redirect('/perfil');
    }

    public function getEmployees($id){
        // Fetch Employees by Departmentid
        $userData['data'] = DB::table('districts')
            ->where('coderegion', '=', $id)
            ->get();

        echo json_encode($userData);
        exit;
    }
}
