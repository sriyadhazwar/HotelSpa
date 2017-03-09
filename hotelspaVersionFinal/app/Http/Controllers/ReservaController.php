<?php namespace HotelUnicorns\Http\Controllers;

use HotelUnicorns\Http\Requests;
use HotelUnicorns\Http\Controllers\Controller;
use HotelUnicorns\Servicios;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Auth;

class ReservaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('reserva');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//TODO cambiar variables habit y cliente por el valor que deberia llevar en la session , dni y habitacion del usuario
		if (isset($_POST['btnRestaurant'])){
			$restaurant = new servicios;
			$restaurant -> serv = "Restaurante";
			$restaurant -> cliente = auth::user()->id;
			$restaurant -> habit = Input::get('habit');
			$restaurant -> observaciones = Input:: get('pedido');

			if($restaurant -> observaciones ==  ""){
				return view('reserva');
			}else{
				$restaurant -> save();
			}

			return view('reserva');

		}
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}



