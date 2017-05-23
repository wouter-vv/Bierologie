<?php

namespace App\Http\Controllers;

use App\Breweries;
use Illuminate\Http\Request;

class BreweriesController extends Controller
{
    public function show()
    {
        $breweries = Breweries::orderBy('id', 'asc')->paginate(8);
        return view('breweries', array('breweries' => $breweries));
    }

    public function detail($id)
    {
        $brewery = Breweries::findOrFail($id);
        $beers = $brewery->beers;
        return view('brewerydetail', ['brewery' => $brewery, 'beers' => $beers]);
    }
}
