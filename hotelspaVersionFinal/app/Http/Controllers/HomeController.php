<?php

namespace HotelUnicorns\Http\Controllers;
use HotelUnicorns\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rol = Auth::user()->rol;
        if ($rol == 1) {
            return redirect('admin');
        } else {
            return view('user.user');
        }
    }
}
