<?php namespace HotelUnicorns\Http\Controllers;

use HotelUnicorns\Http\Requests;
use HotelUnicorns\Http\Controllers\Controller;
use HotelUnicorns\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller {

	public function index()
	{

		//$usuarios= User::with('User')->get();
        //return view('admin', compact('usuarios'));

        $usuarios= User::all();
        $usuarios= User::all();
        return view('admin')->with('usuarios',$usuarios);


		//$usuarios= Usuarios::all();
		//return view('admin',['usuarios' => $usuarios -> toArray()]);


        //$users= User::all();
    	//return view('admin',['users' => $users -> toArray()]);
	}

}