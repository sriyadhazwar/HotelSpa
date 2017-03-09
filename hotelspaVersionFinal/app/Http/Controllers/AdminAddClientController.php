<?php

namespace HotelUnicorns\Http\Controllers;

use HotelUnicorns\Http\Requests;
use HotelUnicorns\Http\Controllers\Controller;
use HotelUnicorns\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class AdminAddClientController extends Controller
{
		/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('adminAddClient');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//TODO cambiar variables habit y cliente por el valor que deberia llevar en la session , dni y habitacion del usuario
		if (isset($_POST['btnAddClient'])){
			$user = new User;
			$user -> name = Input::get('name');
			$user -> dni  = Input::get('dni');
			$user -> password = bcrypt(Input::get('password'));
			$user -> save();
			return view('adminAddClient');
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


  	protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'dni' => 'required|max:9|min:9|unique:users',
            'password' => 'required|min:3|confirmed',
        ]);
    }
    
}
