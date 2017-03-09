<?php namespace HotelUnicorns\Http\Controllers;

use HotelUnicorns\Http\Requests;
use HotelUnicorns\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CartaController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('cart');
	}

}
