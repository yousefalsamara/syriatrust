<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Governorate;
use App\News;
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
//        $this->middleware('auth');
}

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()

    {

        $News=News::all();
        $News_1 = News::orderBy('created_at', 'desc')->take(3)->get();

        return view("home",compact('News','News_1'));

    }

    public function i()
    {
        return view('layouts/app');
    }


    public function storeContact(Request $request)
    {

        $request->validate([

            'captcha' => 'required|captcha',
            'name'=>'required',
            'subject'=>'required',
            'mobile'=>'required|numeric',
            'message'=>'required'


        ]);

        $Contact=new Contact();
        $Contact->fill($request->all());

        $Contact->save();
        return "OK";
        //
    }

    public function showNews($id)
    {
        $News=News::find($id);
        return view("show",compact('News'));
    }


    public function contact_us()
    {
       $governorate=Governorate::all();

        return view('createcontact',compact('governorate'));
    }

    public function reloadCaptcha() {
        return response()->json(['captcha' => captcha_img()]);

        
    }
}
