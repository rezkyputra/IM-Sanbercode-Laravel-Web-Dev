<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarController extends Controller
{
    public function daftar()
    {
        return view('Biodata');
    }

    public function home(Request $request)
    {
        $fullname = $request->input("fullname");
        $bio = $request->input("bio");

        return view('home', ['fullname' => $fullname, 'bio' => $bio]);
    }
}
