<?php

namespace HotelUnicorns\Http\Controllers;
use Illuminate\Http\Request;
use HotelUnicorns\Http\Requests;

class RestauranteController extends Controller
{
    public function index()
    {
		return view('restaurant');
	}

}
