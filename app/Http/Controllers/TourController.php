<?php

namespace App\Http\Controllers;

use App\company;
use App\User;
use Illuminate\Http\Request;
use App\Tour;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TourController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                $id = Auth::user()->id;
                $tour = Tour::where('CompanyId', $id)->get();

        return view('Tour.index', compact('tour'));

      //  $tour = Tour::all()->toArray();

       // return view('Tour.index', compact('tour'));
    }
    public function index1()
    {
        $id = Auth::user()->id;
        $book = DB::table('bookings')->join('users', 'bookings.user_id', '=', 'users.id')->join('tours','bookings.tour_id','=','tours.id')->select('users.name as uname','tours.*','users.phone_no as phone_no')
            ->where('tours.CompanyId',$id)
            ->get();
        $result = json_decode($book, true);
        return view('Booking.index', compact('result'));

        //  $tour = Tour::all()->toArray();

        // return view('Tour.index', compact('tour'));
    }
    public function create()
    {
        return view('Tour.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tour = new tour([
            'CompanyId' => Auth::user()->id,
            'name' => $request->get('name'),
            'days' => $request->get('days'),
            'Image' => $request->get('Image'),
            'Details' => $request->get('Details'),
            'Budget' => $request->get('Budget'),
            'NSA' => $request->get('NSA'),
            'departure' => $request->get('departure'),
        ]);

        $tour->save();

        return redirect('/Tour');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tour = Tour::find($id);



        return view('Tour.edit', ['tour' => $tour]);

    }

    public function editpassword1()
    {
       



        return view('editpassword1');

    }
     public function updatepassword1(Request $request)
    {
        
        $id=Auth::user()->id;
        $user = company::find($id);
        $user->password = Hash::make($request->get('password'));
        $user->remember_token = $request->get('remember_token');
        $user->save();
        return redirect('/company');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tour = Tour::find($id);
        $tour->name = $request->get('name');
        $tour->days = $request->get('days');
        $tour->Details = $request->get('Details');
        $tour->Budget = $request->get('Budget');
        $tour->NSA = $request->get('NSA');
        $tour->departure = $request->get('departure');
        $tour->save();

        return redirect('/Tour');
    }

   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tour = Tour::find($id);
        $tour->delete();

        return redirect('/Tour');
    }
}
