<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Governorate;
use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\TestFixture\C;

class ContactController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('CheckAdmin');
    }

    public function index()
    {

            $contact =Contact::paginate(8);
            return view("indexContact", compact('contact'));
            //


    }


    public function destroy($id)
    {
        //



            $y = Contact::find($id)->delete();

            return redirect('/contact');

    }
    public  function show($id){


            $governorate = Governorate::all();

            $contact = Contact::find($id);
            return view('ContactShow', compact("contact", "governorate"));



    }
}
