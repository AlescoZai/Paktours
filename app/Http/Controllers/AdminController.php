<?php

namespace App\Http\Controllers;

use App\company;
use App\Tour;
use App\User;
use Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin');
    }
    public function getLogout()
    {
        Auth::logout();

        return redirect('http://localhost:8000/');
    }
}