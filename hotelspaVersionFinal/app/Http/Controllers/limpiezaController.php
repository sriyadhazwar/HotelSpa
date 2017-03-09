<?php

namespace HotelUnicorns\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use HotelUnicorns\Servicios;
use HotelUnicorns\Http\Requests;
use Auth;

class limpiezaController extends Controller
{
    	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return view('limpieza');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        if (isset($_POST['btnlimpiar'])){
            $servicios = new servicios;
            $servicios -> serv = 'Limpieza';
            $servicios -> cliente = auth::user()->id;
            $servicios -> habit = Input::get('habit');
            $servicios -> observaciones = Input::get('tipolimp');
            $servicios -> save();
            return view('user.userservices');
        }

	}

	
}
