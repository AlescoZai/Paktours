<?php

namespace App\Http\Controllers;

use App\Tour;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CompanyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:company');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLogout()
    {
        Auth::logout();

        return redirect('http://localhost:8000/');
    }


    public function index()
    {
        return view('Tour/company');
    }
    public function bidding()
    {
        $tour['data'] = DB::table('temptours')->paginate(3);;
        $bid['data1'] = DB::table('bids')->join('companies', 'bids.Company_id', '=', 'companies.id')->select('companies.id as c_id','companies.*','bids.*')
           ->get();
        return view('Tour/bidding',$tour,$bid);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

}