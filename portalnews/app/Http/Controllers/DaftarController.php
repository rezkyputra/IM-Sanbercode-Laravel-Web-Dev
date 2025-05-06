<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarController extends Controller
{
    public function pendaftaran()
    {
        return view('page.daftar');
    }

    public function dashboard(Request $request)
    {
        $fullname = $request->input('fname');
        $address = $request->input('address');

        return view('page.home', ['fullname' => $fullname, 'address' => $address]);
    }
}
