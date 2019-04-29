<?php

namespace App\Http\Controllers;

use App\Company;
use App\Region;
use Auth;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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


    public  function  guardarImagenPefil( Request $request){
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName();

//            // Para mover archivos locales
//            $destinationPath = public_path('/images');
//            $file->move($destinationPath, $name);

//            //
//            $file = $request->file('image');
//            $name = time() . $file->getClientOriginalName();

            $filePath = 'images/' . $name;
            Storage::disk('s3')->put($filePath, file_get_contents($file));


        }
        return $name;
        //return redirect('/perfil');
    }

}
