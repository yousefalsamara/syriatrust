<?php

namespace App\Http\Controllers;


use App\Contact;
use App\News;
use Illuminate\Http\Request;

class SyriatrustController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $News=News::all();
        $News_1 = News::orderBy('created_at', 'desc')->take(3)->get();

        return view("index",compact('News','News_1'));



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
//    public function store(Request $request)
//    {
//
//        $request->validate([
//
//            'captcha' => 'required|captcha',
//            'name'=>'required',
//            'subject'=>'required',
//            'mobile'=>'required|numeric',
//            'message'=>'required'
//
//
//        ]);
//
//
//
//
//
//      $Contact=new Contact();
//      $Contact->fill($request->all());
//
//      $Contact->save();
//      return "OK";
//        //
//    }
//    public function reloadCaptcha() {
//        return response()->json(['captcha' => captcha_img()]);
//    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function show($id)
//    {
//        $News=News::find($id);
//        return view("show",compact('News'));
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
