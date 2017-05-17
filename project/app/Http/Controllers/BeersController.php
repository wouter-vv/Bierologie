<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeersController extends Controller
{
    public function show()
    {
        return view('overview');
    }
}
