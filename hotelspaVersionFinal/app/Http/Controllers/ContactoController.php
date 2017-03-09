<?php namespace HotelUnicorns\Http\Controllers;

use Illuminate\Http\Request;

use HotelUnicorns\Http\Requests;

class ContactoController extends Controller
{
    public function index()
	{
		return view('contactRestaurant');
	}
}
