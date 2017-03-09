<?php

namespace HotelUnicorns\Http\Controllers;

use HotelUnicorns\Http\Requests;
use HotelUnicorns\Http\Controllers\Controller;
use HotelUnicorns\Servicios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use HotelUnicorns\User;

class AdminserviciosController extends Controller{

    public function index(){
        $servicios = Servicios::with('user')->get();

        return view('adminservicios', compact('servicios'));
    }

    public function destroy() {

        if (isset($_POST['btnDeleteAct'])){

            $idBorrar = Input::get('id');
            $servicio = Servicios::where('id', '=', $idBorrar)->get();

            if($servicio != null) {
                Servicios::where('id', '=', $idBorrar)->delete();
            }

            $servicios = Servicios::with('user')->get();
            return view('adminservicios', compact('servicios'));
        }

        else if(isset($_POST['btnUpdateAct'])){

            $idUpdate = Input::get('id');
            $servicio = Servicios::find($idUpdate);

            $servi = Input::get('tipo');

            $habitacion = Input::get('hab');

            $observacion = Input::get('mod');

            if($servicio != null){
                $servicio->serv = $servi;
                $servicio->habit = $habitacion;
                $servicio->observaciones = $observacion;

                $servicio->save();
            }

            $servicios = Servicios::with('user')->get();
            return view('adminservicios', compact('servicios'));

        }
    }
}