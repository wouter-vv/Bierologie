<?php

namespace App\Http\Controllers;

use App\Beers;
use App\Breweries;
use Illuminate\Http\Request;

class BeersController extends Controller
{
    public function show()
    {
        $beers = Beers::orderBy('id', 'asc')->paginate(8);
        return view('beers', array('beers' => $beers));
    }
    public function detail($id)
    {
        $beer = Beers::findOrFail($id);
        $brewery = $beer->brewery;
        $rating = $beer->rating;
        $brewerybeers = Beers::where('brewery_id', '=', $brewery->id)->get();
        return view('beerdetail', ['beer' => $beer,'brewery' => $brewery,'brewerybeers' => $brewerybeers,'rating' => $rating]);
    }
}
