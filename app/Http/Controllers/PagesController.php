<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
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

    public function index()
    {
        return view('user/home');
    }
    public function games()
    {
        return view('user/games');
    }
    public function teams()
    {
        return view('user/teams');
    }
    public function mini_league()
    {
        return view('user/league');
    }
    public function help()
    {
        return view('user/help');
    }
}
