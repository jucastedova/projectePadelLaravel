<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\InscripcioCrearRequest;
use App\Mail\SendMessage;
use Illuminate\Support\Facades\Mail;

class InscripcioController extends Controller
{
    public function index() { 
        return view('index');
    }
    public function inscripcio() { 
        return view('inscripcio');
    }

    public function categoria($data_naixement) {
        $dataActual = time();
        $diferenciaDates = $dataActual - strtotime($data_naixement);
        $diferenciaAnys = $diferenciaDates / (60 * 60 * 24 * 365);
        if ($diferenciaAnys < 12) {
            return '1'; // id_categoria 1 --> categoria sub-12
        } else if ($diferenciaAnys < 18) {
            return '2'; // id_categoria 2 --> categoria sub-18
        } else if ($diferenciaAnys < 30) {
            return '3'; // id_categoria 3 --> categoria sub-30
        } else if ($diferenciaAnys < 60) {
            return '4'; // id_categoria 4 --> categoria sub-60
        } else {
            return '5'; // id_categoria 5 --> categoria veterà
        }
    }

    public function inscription(InscripcioCrearRequest $request) {
        $data = $request->except('_token');

        try {

            DB::beginTransaction();
            // taula tbl_participant
            DB::table('tbl_participants')->insertGetId([
                'dni' => $data['dni'],
                'nom'=>$data['nom'], 
                'primer_cognom'=>$data['primer_cognom'], 
                'primer_cognom'=>$data['primer_cognom'], 
                'segon_cognom'=>$data['segon_cognom'], 
                'data_naixement'=>$data['data_naixement'], 
                'email'=>$data['email'], 
                'sexe'=>$data['sexe']]);

            // tabla inscripcio
            $dni = $data['dni'];
            $nom = $data['nom'];
            // $queryIdParticipant = DB::select('SELECT id_participant FROM tbl_participants WHERE dni = "'.$dni.'"');
            // $id_participant = $queryIdParticipant[0]->id_participant;
            $id_participant = DB::getPdo()->lastInsertId();
            $id_categ = intval($this->categoria($data['data_naixement']));
            DB::table('tbl_inscripcio')->insertGetId([
                'id_participant'=>$id_participant, 
                'id_categoria'=>$id_categ]);

            // return redirect('inscripcio')->with(['inscrip', 'ok'], ['nom', $nom]);
            
            // Correu
            $co = $data['email'];
            $datos_correo = "$nom, t'has inscrit correctament a la cursa.";
            $enviar = new SendMessage($datos_correo);
            $enviar->asunto = "Inscripció cursa";
            Mail::to($co)->send($enviar);
            // END Correu
            DB::commit();
            return redirect('inscripcio')->with('inscrip', 'ok');

        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect('inscripcio')->with('errorInscrip', 'ok');
        }


    }

}
