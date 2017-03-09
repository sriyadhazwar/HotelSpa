<?php

namespace HotelUnicorns\Http\Controllers;
use HotelUnicorns\Actividades;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use HotelUnicorns\Http\Requests;
use Auth;

class spaController extends Controller
{
    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		 return view('spa');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        if (isset($_POST['btnspa'])){
            $spa= new actividades;
            $spa -> act = 'Spa';
            $spa -> cliente = auth::user()->id;
            $spa -> fecha = Input:: get('date');
            $spa -> habit = Input:: get('habit');
            $spa -> save();
            return view('actividades');
        }
	}
}
