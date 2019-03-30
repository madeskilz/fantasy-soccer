<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class HomeController extends Controller
{
    public function index()
    {
    	if (!Auth::user()){
        	return view('land');
    	}elseif (Auth::user()->role_id===1) {
    		return view('home');
    	}

    	return view('user/home');
    }
}
