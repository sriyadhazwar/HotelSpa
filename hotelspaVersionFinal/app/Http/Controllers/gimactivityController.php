<?php

namespace HotelUnicorns\Http\Controllers;
use HotelUnicorns\Actividades;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use HotelUnicorns\Http\Requests;
use Auth;

class gimactivityController extends Controller
{
    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return view('gimactivity');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        if (isset($_POST['btngim'])){
            $gim = new actividades;
            $gim -> act = 'Gimnasio';
            $gim -> cliente = auth::user()->id;
            $gim -> fecha = Input::get('date');
            $gim -> habit = Input::get('habit');
            $gim -> save();
            return view('actividad');
        }
	}
}
