<?php

namespace App\Http\Controllers;

use App\Company;
use App\Region;
use Auth;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use BigBlueButton\BigBlueButton;
use BigBlueButton\Parameters\CreateMeetingParameters;
use BigBlueButton\Parameters\JoinMeetingParameters;

class CompanyController extends Controller
{


    public function unirseReunion(){
        $bbb = new BigBlueButton();
        $meetingID = "1234567";
        $name = "reunion";
        $moderator_password = "123456";
// $moderator_password for moderator
        $joinMeetingParams = new JoinMeetingParameters($meetingID, $name, $moderator_password);
        $joinMeetingParams->setRedirect(true);
        $url = $bbb->getJoinMeetingURL($joinMeetingParams);
        header('Location:' . $url);
    }

    public function vistaRegistrarReunion(){
        return view('layouts.empleador.room');
    }

    public function registrarReunion(Request $request){
        $bbb = new BigBlueButton();

        $meetingID = $request->get('meetingID');
        $meetingName = $request->get('meetingName');
        $attendee_password = $request->get('attendee_password');
        $moderator_password = $request->get('moderator_password');
        $duration = $request->get('duration');
        //$urlLogout = $request->get('urlLogout');

        $createMeetingParams = new CreateMeetingParameters($meetingID, $meetingName);
        $createMeetingParams->setAttendeePassword($attendee_password);
        $createMeetingParams->setModeratorPassword($moderator_password);
        $createMeetingParams->setDuration($duration);
        //$createMeetingParams->setLogoutUrl($urlLogout);
        $isRecordingTrue = true;

        if ($isRecordingTrue) {
            $createMeetingParams->setRecord(true);
            $createMeetingParams->setAllowStartStopRecording(true);
            $createMeetingParams->setAutoStartRecording(false);
        }

        $response = $bbb->createMeeting($createMeetingParams);
        if ($response->getReturnCode() == 'FAILED') {
            return 'Can\'t create room! please contact our administrator.';
        } else {

            $joinMeetingParams = new JoinMeetingParameters($meetingID, $meetingName, $moderator_password);
            $joinMeetingParams->setRedirect(true);
            $url = $bbb->getJoinMeetingURL($joinMeetingParams);
            header('Location:' . $url);
        }
        return view('layouts.empleador.room');
    }
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


    public  function  guardarImagenPerfil( Request $request){
        $this->validate($request, [
            'avatar' => 'required|image|max:2048'
        ]);

        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName();
            $filePath = 'images/' . $name;
            Storage::disk('s3')->put($filePath, file_get_contents($file));
            //$url = Storage::url($filePath);
            $id = Auth::user()->id;
            $empresa = Company::find($id);
            $empresa->logo = $filePath;
            $empresa->save();

        }
        return redirect('/perfil');

    }

}
