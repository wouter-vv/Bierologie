<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BreweriesController extends Controller
{
    public function show()
    {
        return view('overview');
    }
}
