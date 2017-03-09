<?php namespace HotelUnicorns\Http\Controllers;

use HotelUnicorns\Http\Requests;
use HotelUnicorns\Http\Controllers\Controller;

use HotelUnicorns\User;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;

class AdminUpdateClientController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$usuarios = User::where('dni', '!=', '12345678X')->get();
		return view('adminUpdateClient',['usuarios' => $usuarios -> toArray()]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
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
	public function update()
	{
		if (isset($_POST['abrirUpdateModal'])){

			$dniActualizar = Input::get('dni');
			$nombre 	   = Input::get('Nombre');
			$rango 		   = Input::get('Rango');
			$id 		   = Input::get('id');


			$usuario = User::find($id);

			if($usuario != null) {
           		$usuario->name = $nombre;
           		$usuario->rol  = $rango;
           		$usuario->save();
        	}

    		$usua = User::where('dni', '!=', '12345678X')->get();
			return view('adminUpdateClient',['usuarios' => $usua -> toArray()]);

		}
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