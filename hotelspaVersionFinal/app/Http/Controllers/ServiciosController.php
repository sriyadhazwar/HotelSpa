<?php

namespace HotelUnicorns\Http\Controllers;

use Illuminate\Http\Request;

use HotelUnicorns\Http\Requests;

class ServiciosController extends Controller
{
    public function index()
    {
		return view('user.userservices');
	}
}
