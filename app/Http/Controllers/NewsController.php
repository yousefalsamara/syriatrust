<?php

namespace App\Http\Controllers;

use App\Governorate;
use App\News;
use http\Client\Curl\User;
use Illuminate\Http\Request;
;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     *
     */
    public function __construct()
    {
        $this->middleware('CheckAdmin');
    }

    public function index()
    {

            $News = News::all();
            return view("indexNews", compact('News'));
            //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {



            $governorate=Governorate::all();
            return view('addNews',compact('governorate'));






;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

//     dd($request->all());
        //
        $news=new News();

        $news->fill($request->all() );


        if($request->hasFile('image')){

            $name=$request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/',$name);

        }

        $news->save();
        $news->governorates()->attach($request->governorate);
        $news->update(['image' => $name]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $news = News::find($id);
        $governorate = Governorate::all();
        return view('EditNews', compact('news', 'governorate'));


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
        $news=News::find($id);
        $news->fill($request->all() );
        if($request->hasFile('image')){

            $name=$request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/',$name);

        }
        $news->save();
        $news->governorates()->sync($request->governorate);
        $news->update(['image' => $name]);

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


            $y = News::find($id)->governorates()->detach();
            $y = News::find($id)->delete();

            return redirect('/news');


    }
}
