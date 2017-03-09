<?php

namespace HotelUnicorns\Http\Controllers;
use Illuminate\Http\Request;
use HotelUnicorns\Actividades;
use Illuminate\Support\Facades\Input;
use HotelUnicorns\Http\Requests;
use Auth;

class masajeController extends Controller
{
    public function index()
	{
        return view('masaje');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        if (isset($_POST['btnmasaje'])){
            $masaje= new Actividades;
            $masaje -> act = 'Masaje';
            $masaje -> cliente = auth::user()->id;
            $masaje -> fecha = Input::get('date');
            $masaje -> habit = Input::get('habit');
            $masaje -> save();
            return view('actividad');
        }
	}
}
