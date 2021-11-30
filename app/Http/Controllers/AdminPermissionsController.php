<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminPermissionsController extends Controller
{


    public function __construct()
    {
        $this->middleware('CheckAdmin');
    }

    public function showpermissions()
    {

            return view('indexAdmin');

        //
    }
}
