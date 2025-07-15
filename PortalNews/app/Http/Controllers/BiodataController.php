<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function formdaftar()
    {
        return view('page.daftar');
    }

    public function welcome(Request $request)
    {
        $fullname = $request->input("fullname");
        $biodata = $request->input("bio");

        return view('page.home', ["fullname" => $fullname, 'bio'=>$biodata]);
    }
}
