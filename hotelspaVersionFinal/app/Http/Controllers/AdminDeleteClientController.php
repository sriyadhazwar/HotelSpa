<?php namespace HotelUnicorns\Http\Controllers;

use HotelUnicorns\Http\Requests;
use HotelUnicorns\Http\Controllers\Controller;

use HotelUnicorns\User;
use Illuminate\Support\Facades\Input;


use Illuminate\Http\Request;

class AdminDeleteClientController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//$auth::user()->id
		$usuarios = User::where('dni', '!=', '12345678X')->get();
		return view('adminDeleteClient',['usuarios' => $usuarios -> toArray()]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//$user = User::where('u_id', '=', $userid)
         //   ->where('type', '=', 1)
         //   ->where('is_active', '=', 1)
        //-> "only select firstname and lastname"
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
	public function destroy()
	{


		if (isset($_POST['btnDeleteClient'])){

			$dniBorrar = Input::get('dni');
			$usuario = User::where('dni', '=', $dniBorrar)->get();

			if($usuario != null) {
           		User::where('dni', '=', $dniBorrar)->delete();
        	}

    		$usua = User::where('dni', '!=', '12345678X')->get();
			return view('adminDeleteClient',['usuarios' => $usua -> toArray()]);

		}
		
	}

}
