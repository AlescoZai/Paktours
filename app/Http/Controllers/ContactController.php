<?php

namespace App\Http\Controllers;


use App\contact;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
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
               
                $contact =Contact::join('users','contacts.user_id','=','users.id')->select('users.name as uname','contacts.*')->get() ;

        return view('Contact.index', compact('contact'));

      //  $tour = Tour::all()->toArray();

       // return view('Tour.index', compact('tour'));
    }

    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();

        return redirect('/Contact');
    }
}
