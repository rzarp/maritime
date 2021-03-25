<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PariwisataController extends Controller
{
    //
    public function inputpariwisata() 
    {
        return view('user-master.input-pariwisata');
    }
}
