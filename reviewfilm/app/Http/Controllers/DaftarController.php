<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarController extends Controller
{
    public function register()
    {
        return view('pendaftaran');
    }

    public function welcome(Request $request)
    {
        $fullname = $request->input("fullname");
        $address = $request->input("address");

        return view("home", ["fullname"=> $fullname, "address"=>$address]);
    }
}
