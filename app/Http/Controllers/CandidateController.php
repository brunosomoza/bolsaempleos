<?php

namespace App\Http\Controllers;

use App\Candidate;
use App\Company;
use Auth;
use BigBlueButton\BigBlueButton;
use BigBlueButton\Parameters\JoinMeetingParameters;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CandidateController extends Controller
{

    public function unirseReunion(){
        return view('layouts.candidatos.room');
    }

    public function unirseReunionPost(Request $request){

        $bbb = new BigBlueButton();
        $meetingID = $request->get('meetingID');
        $name = $request->get('name');
        $password = $request->get('attendee_password');
        // $moderator_password for moderator
        $joinMeetingParams = new JoinMeetingParameters($meetingID, $name, $password);
        $joinMeetingParams->setRedirect(true);
        $url = $bbb->getJoinMeetingURL($joinMeetingParams);

        header('Location:' . $url);
    }

    public  function  actualizarContacto( Request $request){
        $id = Auth::user()->id;
        $candidato = Candidate::find($id);
        $candidato->telephone = $request->get('telephone');
        $candidato->sexo = $request->get('sexo');
        $candidato->region = $request->get('code_depa');
        $candidato->district = $request->get('code_districts');
        $candidato->title = $request->get('title');
        $candidato->save();

        return redirect('/perfil');

    }


    public  function  actualizarPerfil( Request $request){
        $id = Auth::user()->id;
        $candidato = Candidate::find($id);
        $candidato->name = $request->get('name');
        $candidato->profession_id = $request->get('industria');
        $candidato->salary = $request->get('salary');
        $candidato->years_experience = $request->get('years_experience');
        $candidato->birthdate = $request->get('birthdate');
        $candidato->price_hour_min = $request->get('price_hour_min');
        $candidato->price_hour = $request->get('price_hour');
        $candidato->language = $request->get('language');
        $candidato->level_language = $request->get('level_language');
        $candidato->objective = $request->get('objective');

        $candidato->save();

        return redirect('/perfil');
    }


    public  function  guardarImagenPerfil( Request $request){
        $this->validate($request, [
            'avatar' => 'required|image|max:2048'
        ]);

        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName();
            $filePath = 'images/' . $name;
            Storage::disk('s3')->put($filePath, file_get_contents($file));
            $id = Auth::user()->id;
            $candidato = Candidate::find($id);
            $candidato->picture = $filePath;
            $candidato->save();

        }
        return redirect('/perfil');

    }
}


