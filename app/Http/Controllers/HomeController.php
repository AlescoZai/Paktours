<?php

namespace App\Http\Controllers;

use App\Booking;
use App\comment;
use App\contact;
use App\Like;
use App\Tour;
use App\temptour;
use App\User;
use App\Bid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;

class HomeController extends Controller
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
        $travels['data'] = DB::table('companies')->paginate(3);
       // you were missing the get method
        $tours['data1']=DB::table('tours')->orderBy('NRP', 'DESC')->get();

        if(count($travels) > 0)
        return view('index-2',$travels,$tours);
        else
            return view('index-2','tours');
    }
    public function package()
    {
        if(Auth::user())
        {
         $id = Auth::user()->id;
        $tour['data'] = DB::table('temptours')->where('user_id','=',$id)->paginate(3); // you were missing the get method
        }
        else
        {
        $tour['data'] = DB::table('temptours')->paginate(3); // you were missing the get method
        }   
        $bid['data1'] = DB::table('bids')->join('companies', 'bids.Company_id', '=', 'companies.id')->select('companies.id as c_id','companies.*','bids.*')
            ->get();
            
            return view('package-3-col',$tour,$bid);
        
    }
    public function package1()
    {
        
        $tour['data'] = DB::table('tours')->paginate(4);
        $tour1['data1'] = DB::table('likes')->get();// you were missing the get method
        if(count($tour) > 0)
            return view('package-grid',$tour,$tour1);
        else
            return view('package-grid');
    }

    public function search(Request $request)
    {
        $name = $request->name;
        $tour['data']=Tour::where('name',$name)->get();

        if(count($tour) > 0)
            return view('package-3-col',$tour);
        else
            return view('package-3-col');
    }
    public function search1(Request $request)
    {
        $name = $request->name;
        $tour['data']=Tour::where('name',$name)->paginate(3);
        $tour1['data1'] = DB::table('tours')->get();
        if(count($tour) > 0)
            return view('package-grid',$tour,$tour1);
        else
            return view('package-grid');
    }
    public function search2(Request $request)
    {
        if($request->budget==null)
            $request->budget=0;
        if($request->location==null)
            $request->location=0;
        if($request->departure==null)
            $request->departure=0-0-0;
        $var =  implode("-", array_reverse(explode("/", $request->departure)));
        $tour['data']=Tour::where('Budget','<=',$request->budget)->where('name',$request->location)->where('departure',$var)
            ->paginate(3);
        $tour1['data1']=Tour::all();


        if(count($tour) > 0)
            return view('package-grid',$tour,$tour1);
        else
            return view('package-grid');
    }
    public function dashboard()
     {
        $id = Auth::user()->id;
        $book = DB::table('bookings')->join('users', 'bookings.user_id', '=', 'users.id')->join('tours','bookings.tour_id','=','tours.id')->select('users.name as uname','tours.*','bookings.seats as seats')
            ->where('bookings.user_id',$id)
            ->get();
        $result = json_decode($book, true);

         return view('user_dashboard', compact('result'));
    }
     public function addtour()
    {
         if(Auth::user())
        {
        return view('user_addtour');
        }
        else
        {
             return redirect('/login');
        }
    }
    public function editpassword()
    {
         if(Auth::user())
        {
        return view('editpassword');
        }
        else
        {
             return redirect('/login');
        }
    }
    public function addutour(Request $request)
    {
        $tempid=Auth::user()->id;
        if($request->get('NRP')>=20)
        {
        $temptour = new temptour([
            'name' => $request->get('name'),
            'days' => $request->get('days'),
            'Details' => $request->get('Details'),
            'NRP' => $request->get('NRP'),
            'departure' => $request->get('departure'),
            'user_id'=>$tempid,
        ]);

        $temptour->save();

        return redirect('/package-3-col');
        }
        else
        {
             Session::flash('flash_message', 'Booked Seat Must Be Greater Than 20');
           return back();
        }
    }
     public function bidding($tour_id,Request $request)
    {
        if(Auth::user()) {
            $tempid=Auth::user()->id;
            $tour=temptour::where('id','=',$tour_id)->first();
            if (bid::where('Company_id', '=', $tempid)->where('tt_id','=',$tour_id)->exists()) {
                Session::flash('flash_message', 'Already Booked');
            }
            else
            {

                if(!(($request->NSA)>23))
                {
                    Session::flash('flash_message', 'Seats Must Be Greater Than 23');
                }
               
                else {

                    $bid = new bid([
                        'Company_id' => Auth::user()->id,
                        'tt_id' => $tour_id,
                        'NSA' => $request->NSA,
                        'Budget'=>$request->Budget,
                        'Details'=>$request->details,
                    ]);

                    $bid->save();

                    Session::flash('flash_message', 'Bidding Complete');
                }
            }

            return redirect()->back();
        }
        else {
            Session::flash('flash_message', 'Please Login to Book Tours');
            return redirect('/company.login');
        }

    }
     public function select($temp_id,$bid_id)
    {
        if(Auth::user())
        {

        $bid=bid::find($bid_id);
        
        
        $temptour=temptour::find($bid->tt_id);
          $tour = new tour([
                            'CompanyId' => $bid->Company_id,
                            'name' => $temptour->name,
                            'days' => $temptour->days,
                            'Image' => $temptour->Image,
                            'Details' => $bid->Details,
                            'departure' => $temptour->departure,
                            'Budget' =>  $bid->Budget,
                            'NSA' =>  $bid->NSA,
                            'NRP'=>$temptour->NRP,
                            
                    ]);

                    $tour->save();
                     $book = new Booking([
                        'user_id' => $temptour->user_id,
                        'tour_id' => $tour->id,
                        'seats' => $temptour->NRP,
                    ]);

                    $book->save();
                    $bid->delete();
                    $temptour->delete();
                    Session::flash('flash_message', 'Thanks For Selecting Us');
                    return redirect('/package-3-col');
        }
        else
            return redirect('/login');
        
    }
    public function mail(Request $request)
    {
        $contact = new contact([
            'user_id' => Auth::user()->id,
            'name' => $request->get('name'),
            'last_name' => $request->get('last_name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'subject' => $request->get('subject'),
            'message' => $request->get('message'),
        ]);

        $contact->save();

        session()->flash('msg', 'Email Sent');
        return redirect()->back();
    }
    public function comment(Request $request)
    {
        $comment = new comment([
            'user_id' => Auth::user()->id,
            'name' => $request->get('name'),

            'email' => $request->get('email'),

            'message' => $request->get('message'),
        ]);

        $comment->save();


        return redirect()->back();
    }
    public function blog()
    {
        $comment=comment::get();
        return view('blog-details',compact('comment'));
    }
    public function like($id)
    {
        $user_id=Auth::user()->id;
        $find = like::find($user_id)->first();
        if($find==null) {
            $like = new like ([
                'user_id' => Auth::user()->id,
                'company_id' => $id,


                'value' => 1,
            ]);
            Session::flash('flash_message', 'Thanks For Liking Our Company');
            $like->save();
        }
        else {

            if ($find->company_id == $id) {
                if ($find->value == 0) {
                    Session::flash('flash_message', 'Thanks For Liking Our Company');
                    $find->value = 1;
                } else {
                    Session::flash('flash_message', 'Dislike');
                    $find->value = 0;
                }
            }
            else
            {
                $like = new like ([
                    'user_id' => Auth::user()->id,
                    'company_id' => $id,


                    'value' => 1,
                ]);
                $like->save();
                Session::flash('flash_message', 'Thanks For Liking Our Company');
            }
        }
        $find->save();
        return redirect('http://localhost:8000/package-grid');
    }
    public function getLogout()
    {
        Auth::logout();

        return redirect('http://localhost:8000/');
    }
}
