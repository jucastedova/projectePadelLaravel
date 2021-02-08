<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use App\Http\Requests\RestaurantModifyRequest;
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
            return 'CATID_SUB12'; // id_categoria 1 --> categoria sub-12
        } else if ($diferenciaAnys < 18) {
            return 'CATID_SUB18'; // id_categoria 2 --> categoria sub-18
        } else if ($diferenciaAnys < 30) {
            return 'CATID_SUB30'; // id_categoria 3 --> categoria sub-30
        } else if ($diferenciaAnys < 60) {
            return 'CATID_SUB60'; // id_categoria 4 --> categoria sub-60
        } else {
            return 'CATID_VETERA'; // id_categoria 5 --> categoria veterà
        }
    }

    public function inscription(Request $request) {
        $data = $request->except('_token');
        try {
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

            // REVIEW
            // tabla inscripcio
            DB::table('tbl_inscripcio')->insertGetId([
                'dni' => $data['dni'],
                'nom'=>$data['nom'], 
                'primer_cognom'=>$data['primer_cognom'], 
                'primer_cognom'=>$data['primer_cognom'], 
                'segon_cognom'=>$data['segon_cognom'], 
                'data_naixement'=>$data['data_naixement'], 
                'email'=>$data['email'], 
                 'sexe'=>$data['sexe']]);
                
            $id_categ = $this->categoria($data['data_naixement']);








            // $query1 = "INSERT INTO `tbl_inscripcio` (`id_participant`, `id_categoria`) VALUES (?, ?);";
            // $sentencia1=$pdo->prepare($query1);
            // $sentencia1->bindParam(1,$id_participant);
            // $sentencia1->bindParam(2,$id_categ);
            // // END REVIEW
            // return redirect('inscripcio');

            // taula 
        } catch (\Throwable $th) {
            // REVIEW (modificar!!)
            echo 'Error';
            // END REVIEW
        }

    }

}
