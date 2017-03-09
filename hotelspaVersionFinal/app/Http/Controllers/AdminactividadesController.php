<?php

namespace HotelUnicorns\Http\Controllers;

use HotelUnicorns\Http\Requests;
use HotelUnicorns\Http\Controllers\Controller;
use HotelUnicorns\Actividades;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use HotelUnicorns\User;

class AdminactividadesController extends Controller{

    public function index(){
        $actividades = Actividades::with('user')->get();
        return view('adminactividades', compact('actividades'));
    }

    public function destroy() {

        if (isset($_POST['btnDeleteAct'])){

            $idBorrar = Input::get('id');
            $actividad = Actividades::where('id', '=', $idBorrar)->get();

            if($actividad != null) {
                Actividades::where('id', '=', $idBorrar)->delete();
            }


            $actividades = Actividades::with('user')->get();
            return view('adminactividades', compact('actividades'));
        }

        else if(isset($_POST['btnUpdateAct'])){

            $idUpdate = Input::get('id');
            $actividad = Actividades::find($idUpdate);


            $activi = Input::get('tipo');


            $habitacion = Input::get('hab');


            $fecha = Input::get('mod');


            if($actividad != null){
                $actividad->act = $activi;
                $actividad->habit = $habitacion;
                $actividad->fecha = $fecha;

                $actividad->save();
            }

            $actividades = Actividades::with('user')->get();
            return view('adminactividades', compact('actividades'));

        }
    }
}