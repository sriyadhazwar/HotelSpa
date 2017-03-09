<?php

namespace HotelUnicorns\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use HotelUnicorns\Servicios;
use HotelUnicorns\Http\Requests;
use Auth;

class wakeupController extends Controller
{
    	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return view('wakeup');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        if (isset($_POST['btnwakeup'])){
            $servicios = new Servicios;
            $servicios -> serv = 'Despertador';
            $servicios -> cliente = auth::user()->id;
            $servicios -> habit = Input::get('habit');
            $servicios -> observaciones = Input:: get('comentarios');
            $servicios -> save();
            return view('user.userservices');
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
