<?php

namespace HotelUnicorns\Http\Controllers;

use Illuminate\Http\Request;

use HotelUnicorns\Http\Requests;

class actividadesController extends Controller
{
    
	public function index()
	{
        return view('actividad');
	}

}
