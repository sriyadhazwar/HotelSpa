<?php

namespace HotelUnicorns\Http\Controllers;

use Illuminate\Http\Request;
use HotelUnicorns\User;
use HotelUnicorns\Http\Requests;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
     public function index()
    {
        $rol = Auth::user()->rol;
        if ($rol == 0) {
            return view('user.user');
        } else {
            return redirect('error');
        }
    }
}
