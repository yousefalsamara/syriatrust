<?php

namespace App\Http\Controllers;

use App\Governorate;
use App\News;
use Illuminate\Http\Request;

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

    public function contact_us()
    {
       $governorate=Governorate::all();

        return view('createcontact',compact('governorate'));
    }
}
