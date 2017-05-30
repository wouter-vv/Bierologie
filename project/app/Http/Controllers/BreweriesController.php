<?php

namespace App\Http\Controllers;

use App\Breweries;
use Illuminate\Http\Request;

class BreweriesController extends Controller
{
    /**
     * show the breweries
     */
    public function show()
    {
        $breweries = Breweries::orderBy('id', 'asc')->paginate(8);
        return view('breweries.breweries', array('breweries' => $breweries));
    }

    /**
     * show details of a certain brewery with its beers
     */
    public function detail($id)
    {
        $brewery = Breweries::findOrFail($id);
        $beers = $brewery->beers;
        return view('breweries.brewerydetail', ['brewery' => $brewery, 'beers' => $beers]);
    }
}
