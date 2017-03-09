<?php

namespace HotelUnicorns\Http\Controllers;
use Illuminate\Http\Request;
use HotelUnicorns\Actividades;
use Illuminate\Support\Facades\Input;
use HotelUnicorns\Http\Requests;
use Auth;

class conferenciaController extends Controller
{
    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return view('conferencia');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        if (isset($_POST['btnconferencia'])){
            $conferencia = new actividades;
            $conferencia -> act = 'conferencia';
            $conferencia -> cliente = auth::user()->id;
            $conferencia -> fecha = Input::get('date');
            $conferencia -> habit = Input::get('habit');
            $conferencia -> save();
            return view('actividad');
        }
	}

}
