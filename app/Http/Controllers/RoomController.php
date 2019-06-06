<?php

namespace App\Http\Controllers;

use BigBlueButton\BigBlueButton;
use Illuminate\Http\Request;
use BigBlueButton\Parameters\GetRecordingsParameters;
use BigBlueButton\Parameters\DeleteRecordingsParameters;
use BigBlueButton\Parameters\EndMeetingParameters;
use BigBlueButton\Parameters\PublishRecordingsParameters;


class RoomController extends Controller
{

    public function cambiarPublicmeetingID(){
        $bbb = new BigBlueButton();
        $recordingId = "0d44880ef8419347fa8ff6f25a302fca7dc88de5-1559804242329";
        $publish = true;
        $publishRecordingsParams = new PublishRecordingsParameters($recordingId, $publish);
        $response = $bbb->publishRecordings($publishRecordingsParams);
        return view('home');
    }
    public function terminarRoom(){
        $bbb = new BigBlueButton();
        $meetingID = "Demo Meeting";
        $moderator_password = "mp";
        $endMeetingParams = new EndMeetingParameters($meetingID, $moderator_password);
        $response = $bbb->endMeeting($endMeetingParams);
        return view('home');
    }

    public function eliminarGrabacionID($id){
        $recordingID = $id;
        $bbb = new BigBlueButton();
        $deleteRecordingsParams= new DeleteRecordingsParameters($recordingID); // get from "Get Recordings"
        $response = $bbb->deleteRecordings($deleteRecordingsParams);

        if ($response->getReturnCode() == 'SUCCESS') {
            return view('layouts.bbb.eliminarGrabacionEliminadoOK');
        } else {
            return view('layouts.bbb.eliminarGrabacionError');
        }
        return view('layouts.bbb.eliminarGrabacionUltimo');
    }

    public function listarRoomUP(){
        $arreglo = array(array());
        $lista_reuniones = null;
        $bbb = new BigBlueButton();
        $response = $bbb->getMeetings();
        $contador = 0; $indice =1; $j=0;
        if ($response->getReturnCode() == 'SUCCESS') {
            foreach ($response->getRawXml()->meetings->meeting as $meeting) {
                $contador += $indice;
//                $arr = array("somearray" => array(6 => 5, 13 => 9, "a" => 42));
                $arreglo[$j]["meetingName"] = $meeting->meetingName;
                $arreglo[$j]["meetingID"] = $meeting->meetingID;
                $arreglo[$j]["startTime"] = $meeting->startTime;
                $arreglo[$j]["recording"] = $meeting->recording;
                $arreglo[$j]["internalMeetingID"] = $meeting->internalMeetingID;


                    $j = $j + 1;
//                $lista_reuniones = $meeting->meetingName;
//                $lista_reuniones = $meeting->meetingID;
//                $lista_reuniones = $meeting->internalMeetingID;
//                $lista_reuniones = $meeting->createTime;
//                $lista_reuniones = $meeting->createDate;
//                $lista_reuniones = $meeting->voiceBridge;
//                $lista_reuniones = $meeting->dialNumber;
//                $lista_reuniones = $meeting->attendeePW;
//                $lista_reuniones = $meeting->moderatorPW;
//                $lista_reuniones = $meeting->running;
//                $lista_reuniones = $meeting->duration;
//                $lista_reuniones = $meeting->hasUserJoined;
//                $lista_reuniones = $meeting->recording;
//                $lista_reuniones = $meeting->hasBeenForciblyEnded;
//                $lista_reuniones = $meeting->startTime;
//                $lista_reuniones = $meeting->endTime;
//                $lista_reuniones = $meeting->participantCount;
//                $lista_reuniones = $meeting->listenerCount;
//                $lista_reuniones = $meeting->voiceParticipantCount;
//                $lista_reuniones = $meeting->videoCount;
//                $lista_reuniones = $meeting->maxUsers;
//                $lista_reuniones = $meeting->moderatorCount;
//                $lista_reuniones = $meeting->isBreakout;
//                // falta //attendees, que es una lista

            }
        }
        return view('layouts.bbb.listaRoomUP', compact('arreglo'));
//        return $contador;  // vota el total de salas corriendo
        //return view('layouts.empleador.listarRoom');
    }

    public function listarGrabacionesAll(){
        $arreglo = array(array());
        $contador = 0; $indice =1; $j=0;
        $lista_grabaciones = null;
        $recordingParams = new GetRecordingsParameters();
        $bbb = new BigBlueButton();
        $response = $bbb->getRecordings($recordingParams);

        if ($response->getReturnCode() == 'SUCCESS') {
            foreach ($response->getRawXml()->recordings->recording as $recording) {
                $contador += $indice;
                $arreglo[$j]["recordID"] = $recording->recordID;
                $arreglo[$j]["meetingID"] = $recording->meetingID;
                $arreglo[$j]["name"] = $recording->name;
                $arreglo[$j]["startTime"] = $recording->startTime;
                $arreglo[$j]["endTime"] = $recording->endTime;
                $arreglo[$j]["participants"] = $recording->participants;
                $arreglo[$j]["published"] = $recording->published;
                $arreglo[$j]["internalMeetingID"] = $recording->internalMeetingID;
                $arreglo[$j]["published"] = $recording->published;
                $j = $j + 1;
                //$lista_grabaciones = $recording->recordID;
                //$lista_grabaciones = $recording->meetingID;
//                $lista_grabaciones = $recording->internalMeetingID;
//                $lista_grabaciones = $recording->name;
//                $lista_grabaciones = $recording->isBreakout;
//                $lista_grabaciones = $recording->published;
//                $lista_grabaciones = $recording->state;
//                $lista_grabaciones = $recording->startTime;
//                $lista_grabaciones = $recording->endTime;
//                $lista_grabaciones = $recording->participants;
                foreach ($recording->playback->format as $formato){
//                    $lista_grabaciones = $formato->url;
//                    return $lista_grabaciones;   //siempre vota el ultimo
                }

                // para los demas parametros
            }
        }
        return view('layouts.bbb.eliminarGrabacion', compact('arreglo'));
//        return $arreglo;
    }





}
